<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateEstadoTable extends Migration
{

    protected $connection = 'claves_sat';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('claves_sat')->create('estado', function (Blueprint $table) {
            $table->id('id_estado');
            $table->string('clave_Estado', 5);
            $table->string('c_Pais', 5);
            $table->string('nombre_Estado');
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
        Schema::dropIfExists('estado');
    }
}
