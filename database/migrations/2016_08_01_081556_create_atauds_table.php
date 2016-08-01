<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtaudsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atauds', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ata_tma');
            $table->int('ata_pre');
            $table->int('ata_noc');
            $table->datetime('ata_fec');
            $table->int('proveedor_id');
            $table->int('color_id');
            $table->int('ataudmodelo_id');
            $table->int('ataudtamano_id');
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
		Schema::drop('atauds');
	}

}
