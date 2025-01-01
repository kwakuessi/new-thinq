<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Inventory;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\InventoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InventoryResource\RelationManagers;

class InventoryResource extends Resource
{
    protected static ?string $model = Inventory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                        if ($operation !== 'create') {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    }),

                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(Inventory::class, 'slug', ignoreRecord: true),

                Forms\Components\Select::make('sub_category_id')
                    ->label('Category')
                    ->relationship('subCategory', 'name')
                    ->required(),

                Forms\Components\TextInput::make('description'),

                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('GHS'),

                Forms\Components\Select::make('unit')
                    ->options([
                        'kg' => 'Kilogram',
                        'g' => 'Gram',
                    ])
                    ->required(),

                Forms\Components\FileUpload::make('featured_image')
                    ->image(),
                // Forms\Components\TextInput::make('weight')
                //     ->numeric(),
                Forms\Components\TextInput::make('quantity')
                    ->numeric(),

                // Forms\Components\TextInput::make('type'),
                // Forms\Components\TextInput::make('weight_unit'),
                // Forms\Components\TextInput::make('height_value')
                //     ->numeric(),
                // Forms\Components\TextInput::make('height_unit'),
                // Forms\Components\TextInput::make('width_value')
                //     ->numeric(),
                // Forms\Components\TextInput::make('width_unit'),
                // Forms\Components\TextInput::make('depth_value')
                //     ->numeric(),
                // Forms\Components\TextInput::make('depth_unit'),
                // Forms\Components\TextInput::make('volume_value')
                //     ->numeric(),
                // Forms\Components\TextInput::make('volume_unit'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('unit')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                // Tables\Columns\ImageColumn::make('featured_image'),
                // Tables\Columns\TextColumn::make('weight')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('type')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('weight_unit')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('height_value')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('height_unit')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('width_value')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('width_unit')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('depth_value')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('depth_unit')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('volume_value')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('volume_unit')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('subCategory.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListInventories::route('/'),
            'create' => Pages\CreateInventory::route('/create'),
            'view' => Pages\ViewInventory::route('/{record}'),
            'edit' => Pages\EditInventory::route('/{record}/edit'),
        ];
    }
}
