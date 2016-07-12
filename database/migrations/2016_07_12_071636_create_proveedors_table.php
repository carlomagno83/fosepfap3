<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ruc');
            $table->string('nombre');
            $table->string('direccion');
            $table->int('iddistrito');
            $table->string('telefono_fijo');
            $table->string('telefono_celular');
            $table->string('mail');
            $table->int('costo');
            $table->text('observacion');
            $table->string('user');
            $table->datetime('fecha');
            $table->int('id_categoria');
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
		Schema::drop('proveedors');
	}

}
