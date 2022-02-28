<?php

namespace App\Imports;

use App\Models\State;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

// Importamos la clase WithHeadingRow para poder importar mediante los nombres de cabecera del excel

class StatesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // Este row contiene todas las filas que provienen del archivo de excel
    public function model(array $row)
    {
        return new State([
            //Definimos las columnas que queremos. Parte de la izquierda son las columnas en la BD y de la derecha de excel(deben de ir en miniscula)
            'c_State' => $row['c_estado'],
            'name_State' => $row['nombre']
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


}
