<?php

namespace App\Filament\Resources\SubCategoryResource\Pages;

use App\Filament\Resources\SubCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSubCategory extends ViewRecord
{
    protected static string $resource = SubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label(__('back to list'))
                ->icon('heroicon-o-arrow-left')
                ->color('gray')
                ->url(SubCategoryResource::getUrl()), // go to index
        ]; // Optional: can add edit/delete buttons here
    }
}
