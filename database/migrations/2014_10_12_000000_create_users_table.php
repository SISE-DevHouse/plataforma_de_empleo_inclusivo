<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dni')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('tipodiscapacidad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('curriculum')->nullable();
            $table->string('foto')->nullable();
            $table->string('experiencia')->nullable();
            $table->string('educacion')->nullable();
            $table->string('espeedu')->nullable();
            $table->string('habilidades')->nullable();
            $table->string('role')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
