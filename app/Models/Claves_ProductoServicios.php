<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claves_ProductoServicios extends Model
{
    public $table = "clave_productoservicio";

    use HasFactory;

    protected $fillable = [
        'clave_productoServicio',
        'descripcion',
        'incluir_IVA_trasladado',
        'incluir_IEPS_trasladado',
        'estimulo_franjaFronteriza',
        'palabras_Similares'
    ];
}
