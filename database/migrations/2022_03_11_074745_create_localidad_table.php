<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadTable extends Migration
{

    protected $connection = 'claves_sat';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Localidad', function (Blueprint $table) {
            
            $table->id('id_localidad');

            $table->string('clave_Localidad', 5);

            $table->string('c_Estado', 5);

            $table->string('nombre_Localidad');

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
        Schema::dropIfExists('Localidad');
    }
}
