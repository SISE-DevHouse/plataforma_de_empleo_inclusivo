<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroempresas', function (Blueprint $table) {
            $table->id();

            $table->string('codigoempresa');
            $table->string('nombreempresa');
            $table->string('ruc');
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->string('distrito');

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
        Schema::dropIfExists('registroempresas');
    }
}
