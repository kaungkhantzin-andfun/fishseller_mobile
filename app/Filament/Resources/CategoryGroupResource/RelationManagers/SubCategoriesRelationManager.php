<?php

namespace App\Filament\Resources\CategoryGroupResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Infolists;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Infolists\Infolist;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
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
                ->label(__('name'))
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('slug')
                ->label(__('slug'))
                ->required()
                ->maxLength(255)
                ->hint(__('use romaji if the name is in Japanese.')),
            
            Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\Select::make('category_section_id')
                        ->label(__('category section'))
                        ->relationship('categorySection', 'name')
                        ->reactive()
                        ->required(),
                    Forms\Components\Select::make('category_id')
                        ->label(__('category'))
                        ->options(function (callable $get) {
                            $sectionId = $get('category_section_id');
                    
                            if (!$sectionId) {
                                return [];
                            }
                    
                            return Category::where('category_section_id', $sectionId)->pluck('name', 'id')->toArray();
                        })
                        ->required(),                      
                ]),
            Forms\Components\Toggle::make('status_id')
                ->label(__('status'))
                ->default(1) // true means status_id = 1
                ->required()
                ->afterStateHydrated(function ($component, $state) {
                    // Convert from DB value to boolean for the toggle
                    $component->state($state === 1);
                })
                ->dehydrateStateUsing(function ($state) {
                    // Convert from boolean toggle to status_id
                    return $state ? 1 : 2;
                })
            
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('slug'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('categorySection.name')
                    ->label(__('category section'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('category'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\IconColumn::make('status.name')
                    ->label(__('status'))
                    ->boolean()
                    ->getStateUsing(fn ($record) => $record->status->name === 'Active')
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

                Tables\Filters\SelectFilter::make('category_section_id')
                    ->label(__('category section'))
                    ->relationship('categorySection', 'name'),

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

    public function infolist(Infolist $infolist): Infolist
    {   
        return $infolist
            ->schema([
                Infolists\Components\Section::make()
                    ->schema([
                        Infolists\Components\TextEntry::make('name')
                            ->label(__('name'))
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('categoryGroup.name')
                            ->label(__('category group'))
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('categorySection.name')
                            ->label(__('category section'))
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('category.name')
                            ->label(__('category'))
                            ->inlineLabel(),
                        Infolists\Components\IconEntry::make('status.name')
                            ->label(__('status'))
                            ->boolean()
                            ->getStateUsing(fn ($record) => $record->status->name === 'Active')
                            ->inlineLabel(),
                        Infolists\Components\TextEntry::make('updated_at')
                            ->label(__('updated at'))
                            ->dateTime()
                            ->inlineLabel(),
                    ]),

            ]);
    }

    public static function getTitle(Model $ownerRecord, String $page): string
    {
        return $ownerRecord->name . ' ' . __('sub categories');
    }

}
