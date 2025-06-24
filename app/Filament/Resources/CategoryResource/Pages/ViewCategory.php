<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategory extends ViewRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label(__('back to list'))
                ->icon('heroicon-o-arrow-left')
                ->color('gray')
                ->url(CategoryResource::getUrl()), // go to index
        ]; // Optional: can add edit/delete buttons here
    }
}
