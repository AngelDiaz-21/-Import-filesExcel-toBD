<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipioTable extends Migration
{

    protected $connection = 'claves_sat';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {

            $table->id('id_municipio');

            $table->string('clave_Municipio', 5);

            $table->string('c_Estado', 5);

            $table->string('nombre_Municipio');

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
        Schema::dropIfExists('municipio');
    }
}
