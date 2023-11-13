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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('Nombre');
            $table->string('Apellido_paterno');
            $table->string('Apellido_materno');
            $table->string('Email');
            $table->string('Contraseña');
            $table->dateTime('Días');
            $table->unsignedBigInteger('ID_rol');
            $table->foreign('ID_rol')->references('id_rol')->on('roles_usuario');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
