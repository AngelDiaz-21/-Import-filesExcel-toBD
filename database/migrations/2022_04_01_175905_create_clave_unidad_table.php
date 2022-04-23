<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaveUnidadTable extends Migration
{
    protected $connection = 'claves_sat';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claveUnidad', function (Blueprint $table) {
            $table->id('id_claveUnidad');
            $table->string('clave_Unidad', 5);
            $table->string('nombreUnidad', 150);
            $table->string('descripcion', 600)->nullable();
            $table->string('nota', 280)->nullable();
            $table->string('simbolo', 45)->nullable();
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
        Schema::dropIfExists('claveUnidad');
    }
}
