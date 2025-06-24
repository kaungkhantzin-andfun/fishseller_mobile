<?php

namespace App\Filament\Resources\CategoryGroupResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\CategoryGroupResource;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;

class ViewCategoryGroup extends ViewRecord
{
    protected static string $resource = CategoryGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label(__('back to list'))
                ->icon('heroicon-o-arrow-left')
                ->color('gray')
                ->url(CategoryGroupResource::getUrl()), // go to index
        ]; // Optional: can add edit/delete buttons here
    }

    
}
