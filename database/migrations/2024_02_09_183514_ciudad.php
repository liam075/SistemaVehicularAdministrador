<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
            $ciudades = [
                "Caracas",
                "Maracaibo",
                "Barquisimeto",
                "Barcelona",
                "Ciudad Guayana",
                "Puerto La Cruz",
                "Maturín",
                "San Cristóbal"
            ];

        foreach ($ciudades as $ciudad) {
            DB::table('ciudad')->insert([
                'nombre' => $ciudad
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudad');
    }
};
