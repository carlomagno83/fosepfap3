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
            $table->('pro_ruc string');
            $table->('pro_rso string');
            $table->('pro_dir string');
            $table->('pro_fij stringpro_cel string');
            $table->('pro_mai string');
            $table->('pro_obsstring');
            $table->('departamento_id int');
            $table->('categoria_id int');
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
