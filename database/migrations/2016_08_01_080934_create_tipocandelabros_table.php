<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipocandelabrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipocandelabros', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tca_nom');
            $table->string('tca_tip');
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
		Schema::drop('tipocandelabros');
	}

}
