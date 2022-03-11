<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $table = "estado";

    use HasFactory;

    protected $fillable = [
        'clave_Estado',
        'c_Pais',
        'nombre_Estado',
    ];

}
