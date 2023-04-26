<?php

namespace App\Imports;

use App\Models\Claves_ProductoServicios;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class Claves_ProductoServiciosImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas, ShouldQueue, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Claves_ProductoServicios([
            //
            'clave_productoServicio' => $row['c_claveprodserv'],
            'descripcion' => $row['descripcion'],
            'incluir_IVA_trasladado' => $row['incluir_iva_trasladado'],
            'incluir_IEPS_trasladado' => $row['incluir_ieps_trasladado'],
            'estimulo_franjaFronteriza' => $row['estimulo_franja_fronteriza'],
            'palabras_Similares' => $row['palabras_similares'],
        ]);
    }

    // Batch inserts
    public function batchSize(): int
    {
        return 10300;
    }

    // Chunk reading
    public function chunkSize(): int
    {
        return 3000;
    }

    // Aqui validamos
    public function rules(): array
    {
        return [
            '*.c_claveprodserv' => [
                // 'string',
                'required'
            ],
            '*.descripcion' => [
                'string',
                'required'
            ],
            '*.incluir_iva_trasladado' => [
                'string',
                'required'
            ],
            '*.incluir_ieps_trasladado' => [
                'string',
                'required'
            ],
            '*.estimulofranjafronteriza' => [
                'string',
                // 'integer',
                // 'required'
            ],
            '*.palabras_similares' => [
                // 'string',
                // 'required'
            ]
        ];
    }

}
