<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Mantenimiento extends Model
{
    use HasFactory;
    protected $table ='mantenimiento';
    public function taller(): BelongsTo
    {
        return $this->belongsTo(Taller::class,'id_taller');
    }
    public function vehiculos(): BelongsTo
    {
        return $this->belongsTo(Vehiculos::class,'id_vehiculo');
    }
}
