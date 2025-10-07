<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas'; 

    protected $fillable = ['id', 'nombre', 'apellido', 'telefono']; 

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}