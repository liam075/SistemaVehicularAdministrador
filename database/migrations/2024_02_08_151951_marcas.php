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
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
        $carBrands = [
            'Ford',
            'Toyota',
            'Honda',
            'Volkswagen',
            'Chevrolet',
            'GMC',
            'Cadillac',
            'Buick',
            'Nissan',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Volvo',
            'Hyundai',
            'Kia',
            'Subaru',
            'Porsche',
            'Tesla',
            'Jaguar',
            'Land Rover',
            'Fiat',
            'Chrysler',
            'Dodge',
            'Jeep',
            'Ram',
            'Ferrari',
            'Lamborghini',
            'Maserati',
            'Alfa Romeo',
            'Aston Martin',
            'Bentley',
            'Rolls-Royce',
            'Lexus',
            'Infiniti',
            'Acura',
            'Mazda',
            'Mitsubishi',
            'MINI',
            'Bugatti',
            'Lotus',
            'Genesis',
            'Rivian',
            'Lucid Motors',
            'BYD',
            'Geely',
            'Great Wall Motors',
            'Chery',
            'SAIC Motor Corporation',
            'Dongfeng Motor',
            'FAW Group',
            'Proton',
            'Perodua',
            'Tata Motors',
            'Mahindra & Mahindra',
            'Maruti Suzuki',
            'Suzuki'
        ];
        foreach ($carBrands as $brand) {
            DB::table('marcas')->insert([
                'nombre' => $brand
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcas');
    }
};
