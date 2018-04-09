<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_orden')->nullable();
            $table->string('empresa')->nullable();
            $table->integer('cedula')->nullable();
            $table->integer('ruc')->nullable();
            $table->string('email')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('cel_movi')->nullable();
            $table->integer('cel_claro')->nullable();
            $table->integer('wts')->nullable();
            $table->string('direccion')->nullable();
            $table->date('fecha_posisionamiento')->nullable();
            $table->boolean('activo')->default(1);
            $table->string('imagen')->nullable();            
            $table->string('clausula')->nullable();
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
        Schema::drop('ordens');
    }
}
