<?php

namespace App\Imports;

use App\Models\Estado;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Illuminate\Contracts\Queue\ShouldQueue;

class EstadoImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas, ShouldQueue, SkipsEmptyRows 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // Este row contiene todas las filas que provienen del archivo de excel
    public function model(array $row)
    {
        return new Estado([
            'clave_Estado' => $row['c_estado'],
            'c_Pais' => $row['c_pais'],
            'nombre_Estado' => $row['nombre']
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
            '*.c_estado' => [
                'string',
                'required'
            ],
            '*.c_pais' => [
                'string',
                'required'
            ],
            '*.nombre' => [
                'string',
                'required'
            ]
        ];
    }
}