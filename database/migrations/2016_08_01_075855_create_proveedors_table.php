<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('pro_ruc');
            $table->string('pro_rso');
            $table->string('pro_dir');
            $table->string('pro_fij');
            $table->string('pro_cel');
            $table->string('pro_mai');
            $table->string('pro_obs');
            $table->int('distrito_id');
            $table->int('categoria_id');
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
		Schema::drop('proveedors');
	}

}
