<?php

namespace App\Filament\Resources\ActivosResource\Pages;

use App\Filament\Resources\ActivosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActivos extends ListRecords
{
    protected static string $resource = ActivosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
