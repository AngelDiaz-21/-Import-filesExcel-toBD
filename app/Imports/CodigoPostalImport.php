<?php

namespace App\Imports;

use App\Models\CodigoP;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class CodigoPostalImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas, ShouldQueue, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CodigoP([
            'codigoPostal' => $row['c_cp']
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

    public function rules(): array
    {
        return[
            '.c_cp' => [
                'string',
                'required'
            ],
        ];
    }
}