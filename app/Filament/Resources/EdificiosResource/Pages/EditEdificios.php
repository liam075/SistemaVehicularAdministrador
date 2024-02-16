<?php

namespace App\Filament\Resources\EdificiosResource\Pages;

use App\Filament\Resources\EdificiosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEdificios extends EditRecord
{
    protected static string $resource = EdificiosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
