<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormasPago extends Model
{
    protected $connection = 'claves_sat';
    use HasFactory;

    public $table = "formasPago";


    protected $fillable = [
        'clave_formaPago',
        'descripcion',
        'bancarizado',
        'n_Operacion',
        'RFC_emisor_cuentaOrdenante',
        'cuentaOrdenante',
        'patron_cuentaOrdenante',
        'RFC_emisor_cuentaBeneficiario',
        'cuentaBeneficiario',
        'patron_cuentaBeneficiario',
        'tipo_cadenaPago',
        'nombre_bancoEmisor_cuentaOrdenante_casoExtranjero'
    ];


}
