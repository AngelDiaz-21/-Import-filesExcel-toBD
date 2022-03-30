<?php

namespace App\Models;

// use App\Http\Requests;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Importamos el Notifiable
use Illuminate\Notifications\Notifiable;

class MetodoPago extends Model
{
    public $table = "metodopago";

    // public $importar;
    // public $file;

    use HasFactory;
    // Implementamos Notifiable
    use Notifiable;

    protected $fillable = [
        'clave_metodoPago',
        'descripcion'
    ];
}
