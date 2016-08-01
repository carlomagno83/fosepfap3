<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrnasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('urnas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('urn_tip');
            $table->string('urn_mod');
            $table->string('urn_col');
            $table->int('urn_pre');
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
		Schema::drop('urnas');
	}

}
