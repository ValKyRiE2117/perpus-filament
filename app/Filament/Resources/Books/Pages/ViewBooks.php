<?php

namespace App\Filament\Resources\Books\Pages;

use App\Filament\Resources\Books\BooksResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBooks extends ViewRecord
{
    protected static string $resource = BooksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
