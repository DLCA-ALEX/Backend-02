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
    Schema::create('medicioneslad2dht', function (Blueprint $table) {
        $table->id('ID_Medciones');
        $table->float('humedad_mlad2dht');
        $table->float('temperatura_mlad2dht');
        $table->dateTime('fecha_hora_mlad2dht');
        $table->unsignedBigInteger('ID_usuario');
        $table->unsignedBigInteger('id_sensor_2dht');
        $table->foreign('ID_usuario')->references('id_usuario')->on('usuarios');
        $table->foreign('id_sensor_2dht')->references('id_sensor_2dht')->on('sensores');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicioneslad2dht');
    }
};
