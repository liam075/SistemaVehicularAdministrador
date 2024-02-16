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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('id_marcas');
            $table->timestamps();
        });






        DB::table('modelos')->insert([
            [
                'nombre' => 'Camry',
                'id_marcas' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'F-150',
                'id_marcas' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Civic',
                'id_marcas' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Golf',
                'id_marcas' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Silverado',
                'id_marcas' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Sierra',
                'id_marcas' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Escalade',
                'id_marcas' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Enclave',
                'id_marcas' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Altima',
                'id_marcas' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => '3 Series',
                'id_marcas' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'C-Class',
                'id_marcas' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'A3',
                'id_marcas' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'S60',
                'id_marcas' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Elantra',
                'id_marcas' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Sorento',
                'id_marcas' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Outback',
                'id_marcas' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => '911',
                'id_marcas' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Model S',
                'id_marcas' => 18,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'F-Type',
                'id_marcas' => 19,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Discovery',
                'id_marcas' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
