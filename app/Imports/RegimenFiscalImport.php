<?php

namespace App\Imports;

use App\Models\RegimenFiscal;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;


class RegimenFiscalImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RegimenFiscal([
            //
            'clave_regimenFiscal' => $row['c_regimenfiscal'],
            'descripcion' => $row['descripcion'],
            'tipo_personaFisica' => $row['tipo_personafisica'],
            'tipo_personaMoral' => $row['tipo_personamoral'],
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
            // Above is alias for as it always validates in batches
            // '*.email' => Rule::in(['patrick@maatwebsite.nl']),
            '*.c_regimenfiscal' => [
                'integer',
                'required'
            ],
            '*.descripcion' => [
                'string',
                'required'
            ],
            '*.tipo_personafisica' => [
                'string',
                'required'
            ],
            '*.tipo_personamoral' => [
                'string',
                'required'
            ]
        ];
    }

}
