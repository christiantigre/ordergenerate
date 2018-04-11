<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
                $table->increments('id');
            $table->string('almacen',75)->nullable();
            $table->string('propietario',75)->nullable();
            $table->string('gerente',75)->nullable();
            $table->text('pag_web',75)->nullable();
            $table->string('razon_social',75)->nullable();
            $table->string('ruc',15)->nullable();
            $table->string('auth_sri',15)->nullable();
            $table->string('codestablecimiento',15)->nullable();
            $table->string('codpntemision',15)->nullable();
            $table->string('email',75)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->string('logo',191)->nullable();
            $table->text('slogan')->nullable();
            $table->string('name_logo',191)->nullable();
            $table->boolean('activo')->default(1);
            $table->string('telefono',15)->nullable();
            $table->string('cel_movi',15)->nullable();
            $table->string('cel_claro',15)->nullable();
            $table->string('watsapp',15)->nullable();
            $table->text('fax')->nullable();
            $table->text('fb')->nullable();
            $table->text('tw')->nullable();
            $table->text('ins')->nullable();
            $table->text('gg')->nullable();
            $table->text('funcion_empresa')->nullable();
            $table->text('dirMatriz',191)->nullable();
            $table->text('dirSucursal',191)->nullable();
            $table->string('latitud',50)->nullable();
            $table->string('longitud',50)->nullable();
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
        Schema::drop('empresas');
    }
}
