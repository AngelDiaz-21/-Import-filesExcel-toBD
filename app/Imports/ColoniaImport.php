<?php

namespace App\Imports;

use App\Models\Colonias;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ColoniaImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Colonias([
            //
            'clave_Colonia' => $row['c_colonia'],
            'clave_CodigoPostal' => $row['c_codigopostal'],
            'nombre_Asentamiento' => $row['nombre_asentamiento']
        ]);
    }

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
            '*.c_colonia' => [
                'string',
                'required'
            ],
            '*.c_codigopostal' => [
                // 'integer',
                'required'
            ],
            '*.nombre_asentamiento' => [
                'string',
                'required'
            ]


        ];
    }




}
