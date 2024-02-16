<?php

namespace App\Filament\Resources\EdificiosResource\Pages;

use App\Filament\Resources\EdificiosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEdificios extends ListRecords
{
    protected static string $resource = EdificiosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
