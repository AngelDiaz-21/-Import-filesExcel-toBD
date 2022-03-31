<?php

namespace App\Imports;

use App\Models\Localidad;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class LocalidadImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Localidad([
            //
            'clave_Localidad' => $row['c_localidad'],
            'c_Estado' => $row['c_estado'],
            'nombre_Localidad' => $row['nombre_localidad']
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
            '*.c_localidad' => [
                'string',
                'required'
            ],
            '*.c_estado' => [
                'string',
                'required'
            ],
            '*.nombre_localidad' => [
                'string',
                'required'
            ]


        ];
    }

}
