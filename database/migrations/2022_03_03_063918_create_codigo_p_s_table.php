<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigoPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Arreglar aqui, revisar como pasar el id a varchar
        Schema::create('codigo_p_s', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('id_codigoP')->unsigned();
            // $table->primary('id_codigoP');

            $table->increments('id_cp');
            
            $table->string('codigoPostal', 10);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigo_p_s');
    }
}
