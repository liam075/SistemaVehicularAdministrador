<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudad;
use App\Models\Empresas;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Edificios extends Model
{
    use HasFactory;
    protected $table = 'edificios';
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }
    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empresa');
    }
}
