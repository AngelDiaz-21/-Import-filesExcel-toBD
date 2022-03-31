<?php

namespace App\Imports;

use App\Models\FormasPago;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class FormasPagoImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FormasPago([
            //
            'clave_formaPago' => $row['c_formapago'],
            'descripcion' => $row['descripcion'],
            'bancarizado' => $row['bancarizado'],
            'n_Operacion' => $row['n_operacion'],
            'RFC_emisor_cuentaOrdenante' => $row['rfc_emisor'],
            'cuentaOrdenante' => $row['cuenta_ordenante'],
            'patron_cuentaOrdenante' => $row['patron_cuentaordenante'],
            'RFC_emisor_cuentaBeneficiario' => $row['rfc_emisor'],
            'cuentaBeneficiario' => $row['cuentabeneficiario'],
            'patron_cuentaBeneficiario' => $row['patron_cuentabeneficiario'],
            'tipo_cadenaPago' => $row['tipo_cadenapago'],
            'nombre_bancoEmisor_cuentaOrdenante_casoExtranjero' => $row['nombre_bancoemisor_cuentaordenante_casoextranjero']
        ]);
    }

    // Batch inserts
    public function batchSize(): int
    {
        return 4000;
    }

    // Chunk reading
    public function chunkSize(): int
    {
        return 4000;
    }

    // Aqui validamos
    public function rules(): array
    {
        return [

            '*.c_formapago' => [
                // 'integer',
                'required'
            ],
            '*.descripcion' => [
                'string',
                'required'
            ],
            '*.bancarizado' => [
                'string',
                'required'
            ],
            '*.n_operacion' => [
                'string',
                'required'
            ],
            '*.rfc_emisor' => [
                'string',
                'required'
            ],
            '*.cuenta_ordenante' => [
                'string',
                'required'
            ],
            '*.patron_cuentaordenante' => [
                'string',
                'required'
            ],
            '*.rfc_emisor_cuentabeneficiario' => [
                'string',
                'required'
            ],
            '*.cuentabeneficiario' => [
                'string',
                'required'
            ],
            '*.patron_cuentabeneficiario' => [
                'string',
                'required'
            ],
            '*.tipo_cadenapago' => [
                'string',
                'required'
            ],
            '*.nombre_bancoemisor_cuentaordenante_casoextranjero' => [
                'string',
                'required'
            ]
        ];
    }







}
