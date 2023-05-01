<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsoCFDI extends Model
{
    use HasFactory;

    public $table = "cfdi";

    protected $fillable = [
        'clave_usoCFDI',
        'descripcion',
        'tipo_personaFisica',
        'tipo_personaMoral',
        'regimen_fiscalReceptor'
    ];
}