<?php

namespace App\Filament\Resources\ActivosResource\Pages;

use App\Filament\Resources\ActivosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActivos extends EditRecord
{
    protected static string $resource = ActivosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
