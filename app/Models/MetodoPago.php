<?php

namespace App\Models;

// use App\Http\Requests;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Importamos el Notifiable
use Illuminate\Notifications\Notifiable;

class MetodoPago extends Model
{
    use HasFactory;
    // Implementamos Notifiable
    use Notifiable;
    public $table = "metodopago";

    protected $fillable = [
        'clave_metodoPago',
        'descripcion'
    ];
}