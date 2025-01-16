<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Address;
use App\Models\Booking;
use Filament\Forms\Get;
use App\Models\Customer;
use Filament\Forms\Form;
use App\Enum\OrderStatus;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Actions\Action;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Filament\Resources\BookingResource\Widgets\BookingOverview;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'lucide-clipboard-pen-line';

    public static function form(Form $form): Form
    {
        return $form
            // ->schema([
            //     Forms\Components\TextInput::make('booking_code')
            //         ->required(),
            //     Forms\Components\Select::make('customer_id')
            //         ->relationship('customer', 'name')
            //         ->required(),
            //     Forms\Components\Select::make('shipping_method_id')
            //         ->relationship('shippingMethod', 'name')
            //         ->required(),
            //     Forms\Components\TextInput::make('status')
            //         ->required(),
            // ]);

            ->schema([
                Split::make([
                    Section::make([
                        Forms\Components\TextInput::make('booking_code')
                            ->label('Booking ID')
                            ->default('#SLB' . random_int(100000, 999999))
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(32)
                            ->unique(Booking::class, 'number', ignoreRecord: true)
                            ->required(),

                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
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

                        Forms\Components\Select::make('address_id')
                            ->options(fn(Get $get): Collection => Address::query()
                                ->where('user_id', $get('user_id'))
                                ->pluck('country', 'id'))
                            ->live()

                            ->createOptionForm([
                                Forms\Components\TextInput::make('city'),
                                Forms\Components\TextInput::make('state'),
                                Forms\Components\TextInput::make('country'),
                                Forms\Components\TextInput::make('zip_code'),
                                Forms\Components\TextInput::make('phone')
                                    ->tel(),
                                Forms\Components\Select::make('customer')
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

                    ])->columns(2),
                    Section::make([


                        Forms\Components\ToggleButtons::make('status')
                            ->inline()
                            ->options(OrderStatus::class)
                            ->required(),

                        // Forms\Components\ToggleButtons::make('order_type')
                        //     ->label('Category')
                        //     ->inline()
                        //     ->options(OrderType::class)
                        //     ->required(),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Placeholder::make('created_at')
                                    ->label('Created at')
                                    ->content(fn(Booking $record): ?string => $record->created_at?->diffForHumans()),

                                Forms\Components\Placeholder::make('updated_at')
                                    ->label('Last modified at')
                                    ->content(fn(Booking $record): ?string => $record->updated_at?->diffForHumans()),
                            ])
                            ->columnSpan(['lg' => 1])
                            ->hidden(fn(?Booking $record) => $record === null),



                    ])->grow(false),
                ]),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shippingMethod.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            BookingOverview::class,
        ];
    }
}
