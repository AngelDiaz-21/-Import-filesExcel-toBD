<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formasPago', function (Blueprint $table) {
            $table->id('id_formaPago');
            $table->string('clave_formaPago', 5);
            $table->string('descripcion', 45);
            $table->string('bancarizado', 10);
            $table->string('n_Operacion', 10);
            $table->string('RFC_emisor_cuentaOrdenante', 10);
            $table->string('cuentaOrdenante', 10);
            $table->string('patron_cuentaOrdenante', 60);
            $table->string('RFC_emisor_cuentaBeneficiario', 10);
            $table->string('cuentaBeneficiario', 10);
            $table->string('patron_cuentaBeneficiario', 60);
            $table->string('tipo_cadenaPago', 10);
            $table->string('nombre_bancoEmisor_cuentaOrdenante_casoExtranjero', 200);
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
        Schema::dropIfExists('formasPago');
    }
}
