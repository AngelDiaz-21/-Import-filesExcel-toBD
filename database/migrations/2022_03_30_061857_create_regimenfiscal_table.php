<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegimenfiscalTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimenFiscal', function (Blueprint $table) {
            $table->id('id_regimenFiscal');
            $table->string('clave_regimenFiscal', 5);
            $table->string('descripcion', 200);
            $table->string('tipo_personaFisica', 5);
            $table->string('tipo_personaMoral', 5);
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
        Schema::dropIfExists('regimenFiscal');
    }
}
