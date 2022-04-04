<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaveUnidad extends Model
{
    public $table = "claveUnidad";

    use HasFactory;

    protected $fillable = [
        'clave_Unidad',
        'nombreUnidad',
        'descripcion',
        'nota',
        'simbolo',
    ];

}
