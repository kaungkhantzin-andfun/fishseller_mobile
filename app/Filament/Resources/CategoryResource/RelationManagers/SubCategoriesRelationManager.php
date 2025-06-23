<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class SubCategoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'subCategories';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\Select::make('status_id')
                    ->label(__('status'))
                    ->relationship('status', 'name',fn($query) => $query->whereIn('id',[1,2]))   
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
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
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
                                // Notification::make()
                                //     ->title('Cannot delete')
                                //     ->body('One or more selected category groups have related category sections.')
                                //     ->danger()
                                //     ->send();
            
                                // Cancel the delete action
                                $action->cancel();
                            }
                        }),
                ]),
            ]);
    }

    public static function getTitle(Model $ownerRecord, String $page): string
    {
        return $ownerRecord->name . ' ' . __('sub categories');
    }

}
