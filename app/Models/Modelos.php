<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Marcas;
class Modelos extends Model
{
    use HasFactory;
    protected $table = 'modelos';
    public function marcas(): BelongsTo
    {
        return $this->belongsTo(Marcas::class,'id_marcas');
    }
}
