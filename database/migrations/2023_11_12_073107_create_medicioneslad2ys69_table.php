<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// 07_create_medicioneslad2ys69_table.php
public function up()
{
    Schema::create('medicioneslad2ys69', function (Blueprint $table) {
        $table->id('id_medicioneslad2ys69');
        $table->float('humedad_mlad2ys69');
        $table->float('temperatura_mlad2ys69');
        $table->dateTime('fecha_hora_mlad2ys69');
        $table->unsignedBigInteger('ID_usuario');
        $table->unsignedBigInteger('ID_sensor_2ys69');
        $table->foreign('ID_usuario')->references('id_usuario')->on('usuarios');
        $table->foreign('ID_sensor_2ys69')->references('id_sensor_2ys69')->on('sensores');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicioneslad2ys69');
    }
};
