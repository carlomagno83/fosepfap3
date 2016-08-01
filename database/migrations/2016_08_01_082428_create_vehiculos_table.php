<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculos', function(Blueprint $table) {
            $table->increments('id');
            $table->int('veh_pla');
            $table->string('veh_cla');
            $table->string('veh_ser');
            $table->string('veh_mot');
            $table->string('veh_asi');
            $table->string('veh_pas');
            $table->datetime('veh_fra');
            $table->string('veh_fr');
            $table->int('veh_eje');
            $table->int('veh_rue');
            $table->string('veh_com');
            $table->int('vehiculomodelo_id');
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
		Schema::drop('vehiculos');
	}

}
