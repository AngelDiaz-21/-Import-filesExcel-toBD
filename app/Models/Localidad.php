<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Estado;

class Localidad extends Model
{
    public $table = "Localidad";

    use HasFactory;

    protected $fillable = [
        'clave_Localidad',
        'c_Estado',
        'nombre_Localidad'
    ];

    public function estado(){
        return $this->belongsTo("App\Estado");
    }
}
