<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Estado;

class Municipio extends Model
{
    protected $connection = 'claves_sat';
    use HasFactory;

    public $table = "municipio";



    protected $fillable = [
        'clave_Municipio',
        'c_Estado',
        'nombre_Municipio'
    ];

    public function estado(){
        return $this->belongsTo("App\Estado");
    }
}
