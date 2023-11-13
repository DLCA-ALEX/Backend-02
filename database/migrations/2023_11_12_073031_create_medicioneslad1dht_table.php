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
    Schema::create('medicioneslad1dht', function (Blueprint $table) {
        $table->id('ID_Medciones');
        $table->float('humedad_mlad1dht');
        $table->float('temperatura_mlad1dht');
        $table->dateTime('fecha_hora_mlad1dht');
        $table->unsignedBigInteger('ID_usuario');
        $table->unsignedBigInteger('id_sensor_1dht');
        $table->foreign('ID_usuario')->references('id_usuario')->on('usuarios');
        $table->foreign('id_sensor_1dht')->references('id_sensor_1dht')->on('sensores');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicioneslad1dht');
    }
};
