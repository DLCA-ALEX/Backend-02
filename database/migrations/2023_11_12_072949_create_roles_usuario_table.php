<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */



// 2023_11_01_000005_create_rol_usuario_table.php
public function up()
{
    Schema::create('roles_usuario', function (Blueprint $table) {
        $table->id('id_rol');
        $table->string('Nombre');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_usuario');
    }
};
