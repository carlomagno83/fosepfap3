<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapillasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('capillas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('cap_tip');
            $table->string('cap_mod');
            $table->string('cap_txx');
            $table->int('cap_ccf');
            $table->int('cap_fla');
            $table->int('cap_man');
            $table->int('cap_alf');
            $table->int('cap_cab');
            $table->int('cap_cri');
            $table->int('cap_tar');
            $table->int('cap_rec');
            $table->int('cap_plt');
            $table->int('cap_mul');
            $table->int('proveedor_id');
            $table->int('candelabro_id');
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
		Schema::drop('capillas');
	}

}
