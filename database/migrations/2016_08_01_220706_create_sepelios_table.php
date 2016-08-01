<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepeliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sepelios', function(Blueprint $table) {
            $table->increments('id');
            $table->datetime('cem_fse');
            $table->datetime('cem_hsf');
            $table->datetime('cem_hsv');
            $table->datetime('cem_hic');
            $table->string('cem_tse');
            $table->string('cem_tip');
            $table->string('cem_sep');
            $table->string('cem_nco');
            $table->string('cem_oco');
            $table->datetime('cem_fec');
            $table->int('cem_pre');
            $table->int('distrito_id');
            $table->int('proveedor_id');
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
		Schema::drop('sepelios');
	}

}
