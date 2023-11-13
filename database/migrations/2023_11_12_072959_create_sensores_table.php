<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sensores', function (Blueprint $table) {
            $table->id(); // Esto crea una columna id autoincremental

            $table->unsignedBigInteger('id_sensor_1dht')->unique();
            $table->unsignedBigInteger('id_sensor_2dht')->unique();
            $table->unsignedBigInteger('id_sensor_1ys69')->unique();
            $table->unsignedBigInteger('id_sensor_2ys69')->unique();

            // Agregar relaciones a las otras tablas si es necesario
            // Ejemplo:
            // $table->foreign('id_sensor_1dht')->references('id')->on('otra_tabla');
            // $table->foreign('id_sensor_2dht')->references('id')->on('otra_tabla');
            // $table->foreign('id_sensor_1ys69')->references('id')->on('otra_tabla');
            // $table->foreign('id_sensor_2ys69')->references('id')->on('otra_tabla');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensores');
    }
};
