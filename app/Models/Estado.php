<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Municipio;
use App\Models\Localidad;

class Estado extends Model
{
    use HasFactory;

    protected $connection = 'claves_sat';
    public $table = "estado";
    // protected $table = "estado";


    protected $fillable = [
        'clave_Estado',
        'c_Pais',
        'nombre_Estado',
    ];

    public function municipio(){
        return $this->hasMany("App\Municipio");
    }

    public function localidad(){
        return $this->hasMany("App\Localidad");
    }

}
