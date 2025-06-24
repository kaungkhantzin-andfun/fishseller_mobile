<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Infolists;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\CategoryGroup;
use App\Models\CategorySection;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;
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
                    }),
                Forms\Components\Select::make('status_id')
                    ->label(__('status'))
                    ->relationship('status', 'name',function($query){
                        $query->whereIn('id',[1,2]);
                    })
                    ->required(),
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Select::make('category_group_id')
                            ->label(__('category group'))
                            ->options(CategoryGroup::pluck('name', 'id'))
                            ->reactive()
                            ->required(),
                        Forms\Components\Select::make('category_section_id')
                            ->label(__('category section'))
                            ->options(CategorySection::pluck('name', 'id'))
                            ->reactive()
                            ->required(),
                        Forms\Components\Select::make('category_id')
                            ->label(__('category'))
                            ->options(Category::pluck('name', 'id'))
                            ->required(),
                        
                    ]),
                
                
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
            // RelationManagers\ProductsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubCategories::route('/'),
            // 'create' => Pages\CreateSubCategory::route('/create'),
            // 'edit' => Pages\EditSubCategory::route('/{record}/edit'),
            // 'view' => Pages\ViewSubCategory::route('/{record}'),
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

    public static function afterCreate(Form $form, SubCategory $record): void
    {
        \App\Models\CategoryHierarchy::create([
            'sub_category_id' => $record->id,
            'category_id' => $form->getState()['category_id'],
            'category_section_id' => $form->getState()['category_section_id'],
            'category_group_id' => $form->getState()['category_group_id'],
        ]);
    }
}
