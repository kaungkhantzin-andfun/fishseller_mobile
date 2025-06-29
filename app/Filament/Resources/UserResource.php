<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\Group::make([
                        Forms\Components\FileUpload::make('avatar')
                        ->image()
                        ->imageEditor() // optional: crop/resize
                        ->directory('avatars') // stored in storage/app/public/avatars
                        ->disk('public') // requires storage:link
                        ->visibility('public') // to generate correct public URL
                        ->columnSpan('full')
                        ->alignCenter()
                        ->circleCropper(true)
                        ->maxSize(2048),
                    ]),
                    Forms\Components\Group::make([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->required()
                            ->maxLength(255)
                            ->minLength(8)
                            ->dehydrated(fn ($state) => filled($state))
                            ->dehydrateStateUsing(fn ($state) => bcrypt($state)),
                        Forms\Components\Select::make('status_id')
                            ->relationship('status', 'name')
                            ->required()
                            ->default(1),
                    ])
                ])
                // Forms\Components\TextInput::make('name')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('email')
                //     ->email()
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('password')
                //     ->password()
                //     ->required()
                //     ->maxLength(255)
                //     ->minLength(8)
                //     ->dehydrated(fn ($state) => filled($state))
                //     ->dehydrateStateUsing(fn ($state) => bcrypt($state)),
                // Forms\Components\Select::make('status_id')
                //     ->relationship('status', 'name')
                //     ->required()
                //     ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Avatar')
                    
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->badge(),
                Tables\Columns\TextColumn::make('status.name')
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
            'index' => Pages\ListUsers::route('/'),
            // 'create' => Pages\CreateUser::route('/create'),
            // 'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return __('user management');
    }

    public static function getNavigationLabel(): string
    {
        return __('user');
    }

    public static function getModelLabel(): string
    {
        return __('user');
    }

    public static function getPluralModelLabel(): string
    {
        return __('users');
    }
}
