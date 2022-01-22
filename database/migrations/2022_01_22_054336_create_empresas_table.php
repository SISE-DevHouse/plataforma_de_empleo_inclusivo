<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombreempresa');
            $table->string('ruc');
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->bigInteger('id_distrito')->unsigned();
            $table->timestamps();

            $table->foreign('id_distrito')->references('id')->on('distritos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
