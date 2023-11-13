<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensores extends Model
{
    protected $table = 'sensores';
    protected $primaryKey = 'id_sensor';
    protected $fillable = [];
    public $timestamps = false;
}
