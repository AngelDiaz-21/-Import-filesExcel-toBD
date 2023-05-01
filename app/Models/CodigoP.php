<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigoP extends Model
{
    use HasFactory;

    public $table = "codigo_postal";

    protected $fillable = [
        'codigoPostal'
    ];
}