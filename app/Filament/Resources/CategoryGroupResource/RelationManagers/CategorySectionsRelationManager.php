<?php

namespace App\Filament\Resources\CategoryGroupResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class CategorySectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'categorySections';

   

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('name'))
                    ->required()
                    ->maxLength(255)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute(__('name'))
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->disabled(fn ($record) => $record->categories()->exists())
                    ->hidden(fn ($record) => $record->categories()->exists())
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records, $action) {
                            // Check if any record has related categorySections
                            $hasRelated = $records->some(fn ($record) => $record->categories()->exists());
            
                            if ($hasRelated) {
                                Notification::make()
                                    ->title('Cannot delete')
                                    ->body('One or more selected category sections have related categories.')
                                    ->danger()
                                    ->send();
            
                                // Cancel the delete action
                                $action->cancel();
                            }
                        }),
                ]),
            ]);
    }

    public static function getTitle(Model $ownerRecord, String $page): string
    {
        return $ownerRecord->name . ' ' . __('category sections');
    }


}
