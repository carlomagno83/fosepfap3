<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gestions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ges_car');
            $table->string('ges_cem');
            $table->string('ges_pro');
            $table->string('ges_vel');
            $table->string('ges_obs');
            $table->int('cabeceracontrato_id');
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
		Schema::drop('gestions');
	}

}
