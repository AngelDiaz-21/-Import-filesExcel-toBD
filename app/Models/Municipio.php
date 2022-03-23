<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public $table = "municipio";

    use HasFactory;

    protected $fillable = [
        'clave_Municipio',
        'c_Estado',
        'nombre_Municipio'
    ];

    public function estado(){
        return $this->belongsTo("App\Estado");
    }
}
