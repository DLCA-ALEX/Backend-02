<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicioneslad1dht extends Model
{
    protected $table = 'medicioneslad1dht';
    protected $primaryKey = 'ID_Medciones';
    protected $fillable = ['humedad_mlad1dht', 'temperatura_mlad1dht', 'fecha_hora_mlad1dht', 'ID_usuario', 'id_sensor_1dht'];
}
