<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaveUnidad extends Model
{
    use HasFactory;

    protected $connection = 'claves_sat';
    public $table = "claveUnidad";


    protected $fillable = [
        'clave_Unidad',
        'nombreUnidad',
        'descripcion',
        'nota',
        'simbolo',
    ];

}
