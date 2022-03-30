<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegimenFiscal extends Model
{
    public $table = "regimenFiscal";

    use HasFactory;

    protected $fillable = [
        'clave_regimenFiscal',
        'descripcion',
        'tipo_personaFisica',
        'tipo_personaMoral'
    ];

}
