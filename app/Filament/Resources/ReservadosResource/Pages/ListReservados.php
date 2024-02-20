<?php

namespace App\Filament\Resources\ReservadosResource\Pages;

use App\Filament\Resources\ReservadosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReservados extends ListRecords
{
    protected static string $resource = ReservadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
