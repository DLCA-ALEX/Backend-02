<?php
// app/Models/Usuario.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'Nombre', 'Apellido_paterno', 'Apellido_materno', 'Email', 'Contraseña', 'Días', 'ID_rol',
    ];

    protected $hidden = [
        'Contraseña',
    ];

    public function rol()
    {
        return $this->belongsTo(RolUsuario::class, 'ID_rol');
    }
}
