<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrasladosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traslados', function(Blueprint $table) {
            $table->increments('id');
            $table->datetime('tra_fec');
            $table->string('tra_est');
            $table->string('tra_ttr');
            $table->string('tra_cor');
            $table->string('tra_cde');
            $table->int('tra_klm');
            $table->datetime('tra_fsa');
            $table->datetime('tra_hsa');
            $table->datetime('tra_fll');
            $table->datetime('tra_hll');
            $table->int('tra_pre');
            $table->int('distrito_id');
            $table->int('cabeceracontrato_id');
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
		Schema::drop('traslados');
	}

}
