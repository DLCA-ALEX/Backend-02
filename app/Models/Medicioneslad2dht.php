<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicioneslad2dht extends Model
{
    protected $table = 'medicioneslad2dht';
    protected $primaryKey = 'ID_Medciones';
    protected $fillable = ['humedad_mlad2dht', 'temperatura_mlad2dht', 'fecha_hora_mlad2dht', 'ID_usuario', 'id_sensor_2dht'];
}
