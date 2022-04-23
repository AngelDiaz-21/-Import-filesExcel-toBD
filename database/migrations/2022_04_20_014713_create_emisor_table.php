<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmisorTable extends Migration
{
    protected $connection = 'facturacion';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emisor', function (Blueprint $table) {
            $table->id('id_emisor');
            $table->string('razon_Social', 254);
            $table->string('rfc', 13);
            $table->string('tipo_Persona', 7);
            $table->string('regimenFiscal_clave', 5);
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
        Schema::dropIfExists('emisor');
    }
}
