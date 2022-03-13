<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonias extends Model
{
    public $table = "colonia";

    use HasFactory;

    protected $fillable = [
        'clave_Colonia',
        'clave_CodigoPostal',
        'nombre_Asentamiento',
    ];

}
