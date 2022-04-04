<?php

namespace App\Imports;

use App\Models\ClaveUnidad;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ClaveUnidadImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ClaveUnidad([
            //
            'clave_Unidad' => $row['c_claveunidad'],
            'nombreUnidad' => $row['nombre_unidad'],
            'descripcion' => $row['descripcion'],
            'nota' => $row['nota'],
            'simbolo' => $row['simbolo'],
        ]);
    }

    // Batch inserts
    public function batchSize(): int
    {
        return 10500;
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
            '*.c_claveunidad' => [
                // 'string',
                'required'
            ],
            '*.nombre_unidad' => [
                'string',
                'required'
            ],
            '*.descripcion' => [
                // 'string',
                // 'required'
            ],
            '*.nota' => [
                // 'string',
                // 'required'
            ],
            '*.simbolo' => [
                // 'string',
                // 'integer',
                // 'required'
            ]
        ];
    }
}
