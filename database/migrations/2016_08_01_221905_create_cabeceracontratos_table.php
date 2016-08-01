<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabeceracontratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cabeceracontratos', function(Blueprint $table) {
            $table->increments('id');
            $table->datetime('con_fec');
            $table->string('con_est');
            $table->string('con_tso');
            $table->int('con_dni');
            $table->string('con_tse');
            $table->int('tiposolicitante_id');
            $table->int('medico_id');
            $table->int('sepelio_id');
            $table->int('empleado_id');
            $table->int('fallecido_id');
            $table->int('servicio_id');
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
		Schema::drop('cabeceracontratos');
	}

}
