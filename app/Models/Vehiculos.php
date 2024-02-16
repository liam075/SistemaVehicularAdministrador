<?php

namespace App\Models;

use Filament\Tables\Columns\Contracts\Editable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Vehiculos extends Model
{
    use HasFactory;
    protected $table ='vehiculos';
   
    public function modelos(): BelongsTo
    {
        return $this->belongsTo(Modelos::class,'id_modelos');
    }

    public function edificios(): BelongsTo
    {
        return $this->belongsTo(Edificios::class,'id_edificio');
    }
    public function empresas(): BelongsTo
    {
        return $this->belongsTo(Empresas::class,'id_empresa');
    }
}
