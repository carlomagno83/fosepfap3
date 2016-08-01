<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicos', function(Blueprint $table) {
            $table->increments('id');
            $table->int('med_dni');
            $table->string('med_pat');
            $table->string('med_mat');
            $table->string('med_nom');
            $table->string('med_col');
            $table->string('med_dir');
            $table->string('med_ubi');
            $table->int('distrito_id');
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
		Schema::drop('medicos');
	}

}
