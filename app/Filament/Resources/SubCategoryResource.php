<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Infolists;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SubCategoryResource\Pages;
use App\Filament\Resources\SubCategoryResource\RelationManagers;

class SubCategoryResource extends Resource
{
    protected static ?string $model = SubCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    })->columnSpan(2),
                Forms\Components\Select::make('category_id')
                    ->label(__('category'))
                    ->relationship('category', 'name')
                    ->required(),
                
                Forms\Components\Select::make('status_id')
                    ->label(__('status'))
                    ->relationship('status', 'name',function($query){
                        $query->whereIn('id',[1,2]);
                    })
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('category'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('slug'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('status.name')
                    ->label(__('status'))
                    ->formatStateUsing(fn ($state) => $state === 'Active' ? '🟢 ' . __('active') : '🔴 ' . __('inactive'))
                    ->sortable(),               
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label(__('deleted at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Filters\SelectFilter::make('category_id')
                    ->label(__('category'))
                    ->relationship('category', 'name'),
                Tables\Filters\SelectFilter::make('status_id')
                    ->label(__('status'))
                    ->relationship('status', 'name',function($query){
                        $query->whereIn('id',[1,2]);
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->disabled(fn ($record) => $record->products()->exists())
                    ->hidden(fn ($record) => $record->products()->exists()),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records, $action) {
                            // Check if any record has related categorySections
                            $hasRelated = $records->some(fn ($record) => $record->products()->exists());
            
                            if ($hasRelated) {
                                Notification::make()
                                    ->title('Cannot delete')
                                    ->body('One or more selected sub categories have related products.')
                                    ->danger()
                                    ->send();
            
                                // Cancel the delete action
                                $action->cancel();
                            }
                        }),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {   
        return $infolist
            ->schema([
                Infolists\Components\Section::make()
                    ->schema([
                        Infolists\Components\TextEntry::make('name')
                            ->label(__('name'))
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('slug')
                            ->label(__('slug'))
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('created_at')
                            ->label(__('created at'))
                            ->dateTime()
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('updated_at')
                            ->label(__('updated at'))
                            ->dateTime()
                            ->inlineLabel(),
                    ]),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProductsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubCategories::route('/'),
            // 'create' => Pages\CreateSubCategory::route('/create'),
            'edit' => Pages\EditSubCategory::route('/{record}/edit'),
            'view' => Pages\ViewSubCategory::route('/{record}'),
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return __('category management');
    }

    public static function getNavigationLabel(): string
    {
        return __('sub category');
    }

    public static function getModelLabel(): string
    {
        return __('sub category');
    }

    public static function getPluralModelLabel(): string
    {
        return __('sub categories');
    }
}
