<?php

namespace App\Imports;

use App\Models\UsoCFDI;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class UsoCFDIImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UsoCFDI([
            //
            'clave_usoCFDI' => $row['c_usocfdi'],
            'descripcion' => $row['descripcion'],
            'tipo_personaFisica' => $row['persona_fisica'],
            'tipo_personaMoral' => $row['persona_moral'],
            'regimen_fiscalReceptor' => $row['regimen_fiscal_receptor'],
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
            '*.c_usocfdi' => [
                'string',
                'required'
            ],
            '*.descripcion' => [
                'string',
                'required'
            ],
            '*.persona_fisica' => [
                'string',
                'required'
            ],
            '*.persona_moral' => [
                'string',
                'required'
            ],
            '*.regimen_fiscal_receptor' => [
                // 'string',
                'required'
            ]
        ];
    }



}
