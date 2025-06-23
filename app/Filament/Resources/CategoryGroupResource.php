<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\CategoryGroup;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryGroupResource\Pages;
use App\Filament\Resources\CategoryGroupResource\RelationManagers;

class CategoryGroupResource extends Resource
{

    protected static ?string $model = CategoryGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('name'))
                    ->required()
                    ->maxLength(255)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('slug'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('created at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('updated at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->disabled(function ($record) {
                    return $record->categorySections()->exists();
                }),
                
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
            // relations

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategoryGroups::route('/'),
            // 'create' => Pages\CreateCategoryGroup::route('/create'),
            // 'edit' => Pages\EditCategoryGroup::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('category group');
    }

    public static function getPluralModelLabel(): string
    {
        return __('category groups');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('category management');
    }

    public static function getNavigationLabel(): string
    {
        return __('category group');
    }

}
