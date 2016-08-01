<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicios', function(Blueprint $table) {
            $table->increments('id');
            $table->int('cas_pfa');
            $table->int('cas_pat');
            $table->int('cas_pac');
            $table->int('cas_pne');
            $table->int('cas_pru');
            $table->int('cas_psc');
            $table->int('cas_pta');
            $table->int('cas_pvt');
            $table->int('cas_pvc');
            $table->int('cas_pvf');
            $table->int('cas_pva');
            $table->int('ataud_id');
            $table->int('empleado_id');
            $table->int('vehiculo_id');
            $table->int('capilla_id');
            $table->int('urna_id');
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
		Schema::drop('servicios');
	}

}
