<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activos extends Model
{
    use HasFactory;
    protected $table = 'activos';
    public function vehiculos(): BelongsTo
    {
        return $this->belongsTo(vehiculos::class,'id_vehiculo');
    }
    public function edificios(): BelongsTo
    {
        return $this->belongsTo(Edificios::class,'id_edificio');
    }
}
