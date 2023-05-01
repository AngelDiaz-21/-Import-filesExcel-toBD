<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi', function (Blueprint $table) {
            $table->id('id_usoCFDI');
            $table->string('clave_usoCFDI', 6);
            $table->string('descripcion', 100);
            $table->string('tipo_personaFisica', 5);
            $table->string('tipo_personaMoral', 5);
            $table->string('regimen_fiscalReceptor', 120);
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
        Schema::dropIfExists('cfdi');
    }
}
