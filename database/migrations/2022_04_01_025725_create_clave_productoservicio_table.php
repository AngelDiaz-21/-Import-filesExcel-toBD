<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaveProductoservicioTable extends Migration
{
    protected $connection = 'claves_sat';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clave_productoservicio', function (Blueprint $table) {
            $table->id('id_productoServicio');
            $table->string('clave_productoServicio', 10);
            $table->string('descripcion', 200);
            $table->string('incluir_IVA_trasladado', 10);
            $table->string('incluir_IEPS_trasladado', 10);
            $table->string('estimulo_franjaFronteriza', 5);
            $table->string('palabras_Similares', 600)->nullable();
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
        Schema::dropIfExists('clave_productoservicio');
    }
}
