<?php

namespace App\Filament\Resources\CategorySectionResource\Pages;

use App\Filament\Resources\CategorySectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategorySection extends ViewRecord
{
    protected static string $resource = CategorySectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label(__('back to list'))
                ->icon('heroicon-o-arrow-left')
                ->color('gray')
                ->url(CategorySectionResource::getUrl()), // go to index
        ]; // Optional: can add edit/delete buttons here
    }
}
