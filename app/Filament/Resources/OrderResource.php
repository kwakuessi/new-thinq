<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Order;
use App\Enum\OrderType;
use App\Models\Address;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Customer;
use Filament\Forms\Form;
use App\Enum\OrderStatus;
use App\Models\Inventory;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Actions\Action;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\Widgets\OrdersStatsOverview;
use App\Filament\Resources\OrderResource\RelationManagers\OrderLinesRelationManager;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'pepicon-pen-circle';

   

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        Forms\Components\TextInput::make('order_code')
                            ->label('Order ID')
                            ->default('#OR' . random_int(100000, 999999))
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(32)
                            ->unique(Order::class, 'number', ignoreRecord: true)
                            ->required(),

                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'email')
                            ->live()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email address')
                                    ->required()
                                    ->email()
                                    ->maxLength(255)
                                    ->unique(),
                                Forms\Components\TextInput::make('password')
                                    ->password()
                                    ->required(),

                                Forms\Components\TextInput::make('phone')
                                    ->maxLength(255),

                                Forms\Components\DatePicker::make('birthday')
                                    ->required(),

                                Forms\Components\Select::make('gender')
                                    ->placeholder('Select gender')
                                    ->options([
                                        'male' => 'Male',
                                        'female' => 'Female',
                                        'others' => 'Others',
                                    ])
                                    ->required()
                                    ->native(false),
                            ])
                            ->createOptionAction(function (Action $action) {
                                return $action
                                    ->modalHeading('Create customer')
                                    ->modalSubmitActionLabel('Create customer')
                                    ->modalWidth('lg');
                            }),

                        Forms\Components\Select::make('address_id' )
                            ->options(fn(Get $get): Collection => Address::query()
                                ->where('user_id', $get('user_id'))
                                ->pluck('country', 'id'))
                               
                            ->live()
                            // ->relationship('address', 'address_id')
                            ->createOptionForm([
                                Forms\Components\TextInput::make('city'),
                                Forms\Components\TextInput::make('state'),
                                Forms\Components\TextInput::make('country'),
                                Forms\Components\TextInput::make('zip_code'),
                                Forms\Components\TextInput::make('phone')
                                    ->tel(),
                                Forms\Components\Select::make('user_id')
                                
                                    ->options(function () {
                                        return User::all()->pluck('name', 'id');
                                    })

                                    ->required()
                                    ->native(false),
                            ])->columns(2)
                            ->createOptionAction(function (Action $action) {
                                return $action
                                    ->modalHeading('Create address')
                                    ->modalSubmitActionLabel('Create address')
                                    ->modalWidth('lg');
                            })

                            ->required(),

                        Forms\Components\Select::make('shipping_method_id')
                            ->relationship('shippingMethod', 'name')
                            ->required(),

                        Forms\Components\Section::make('Order items')
                            ->schema([
                                static::getItemsRepeater(),
                            ])->columnSpanFull(),

                    ])->columns(2),
                    Section::make([


                        Forms\Components\ToggleButtons::make('status')
                            ->inline()
                            ->options(OrderStatus::class)
                            ->required(),

                        Forms\Components\ToggleButtons::make('order_type')
                            ->label('Category')
                            ->inline()
                            ->options(OrderType::class)
                            ->required(),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Placeholder::make('created_at')
                                    ->label('Created at')
                                    ->content(fn(Order $record): ?string => $record->created_at?->diffForHumans()),

                                Forms\Components\Placeholder::make('updated_at')
                                    ->label('Last modified at')
                                    ->content(fn(Order $record): ?string => $record->updated_at?->diffForHumans()),
                            ])
                            ->columnSpan(['lg' => 1])
                            ->hidden(fn(?Order $record) => $record === null),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Placeholder::make('customer_id')
                                    ->label('Location:')
                                    ->content(function (Order $record): ?string {
                                        return $record->address?->state . ', ' . $record->address?->city . ', ' . $record->address?->country;
                                    })->inlineLabel(),

                                Forms\Components\Placeholder::make('customer_id')
                                    ->label('Phone:')
                                    ->content(function (Order $record): ?string {
                                        return $record->address?->phone;
                                    })->inlineLabel(),

                            ])
                            ->label('Address Deta')
                            ->columnSpan(['lg' => 1])
                            ->hidden(fn(?Order $record) => $record === null),



                    ])->grow(false),
                ]),
            ])->columns(1)
        ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([


                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('order_code')
                    ->label('Order ID')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('address.country')->label('Location')
                    // ->formatStateUsing(function (Order $record): string {
                    //     return $record->country . ', ' . $record->city . ', ' . $record->state;
                    // })


                    ->sortable(),

                IconColumn::make('order_type')
                    ->label('Category')
                    ->icon(fn(string $state): string => match ($state) {
                        'shipment' => 'heroicon-o-truck',
                        'customer_order' => 'heroicon-o-cube',
                    }),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->searchable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }


    public static function getItemsRepeater(): Repeater
    {
        return Repeater::make('orderLines')
            ->label('Order Items')
            ->relationship()
            ->schema([
                Forms\Components\Select::make('inventory_id')
                    ->label('Product')
                    ->options(Inventory::query()->pluck('name', 'id'))
                    ->preload()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn($state, Set $set) => $set('unit_price', Inventory::find($state)?->price ?? 0))
                    ->distinct()
                    ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                    ->columnSpan([
                        'md' => 5,
                    ])
                    ->searchable(),

                Forms\Components\TextInput::make('quantity')
                    ->label('Quantity')
                    ->numeric()
                    ->default(1)
                    ->columnSpan([
                        'md' => 2,
                    ])
                    ->required(),

                Forms\Components\TextInput::make('unit_price')
                    ->label('Unit Price')
                    ->disabled()
                    ->dehydrated()
                    ->numeric()
                    ->required()
                    ->columnSpan([
                        'md' => 3,
                    ]),
            ])
            ->extraItemActions([
                Action::make('openProduct')
                    ->tooltip('Open product')
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->url(function (array $arguments, Repeater $component): ?string {
                        $itemData = $component->getRawItemState($arguments['item']);

                        $product = Inventory::find($itemData['inventory_id']);

                        if (!$product) {
                            return null;
                        }

                        return InventoryResource::getUrl('edit', ['record' => $product]);
                    }, shouldOpenInNewTab: true)
                    ->hidden(fn(array $arguments, Repeater $component): bool => blank($component->getRawItemState($arguments['item'])['inventory_id'])),
            ])
            ->orderColumn('sort')
            ->defaultItems(1)
            ->hiddenLabel()
            ->columns([
                'md' => 10,
            ])
            ->required();
    }

    public static function getRelations(): array
    {
        return [
            // OrderLinesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            OrdersStatsOverview::class,
        ];
    }
}
