<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    protected $table = 'rol_usuario';
    protected $primaryKey = 'id_rol';
    protected $fillable = ['Nombre'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'ID_rol');
    }
}
