<?php

namespace App\Filament\Resources\InactivosResource\Pages;

use App\Filament\Resources\InactivosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInactivos extends EditRecord
{
    protected static string $resource = InactivosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
