<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacionsepeliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programacionsepelios', function(Blueprint $table) {
            $table->increments('id');
            $table->datetime('prs_fec');
            $table->string('prs_dni');
            $table->string('prs_pat');
            $table->string('prs_mat');
            $table->string('prs_nom');
            $table->string('prs_vel');
            $table->string('prs_cem');
            $table->string('prs_vca');
            $table->string('prs_chc');
            $table->string('prs_vfl');
            $table->string('prs_cfl');
            $table->string('prs_vac');
            $table->string('prs_cac');
            $table->string('prs_hsf');
            $table->string('prs_hsv');
            $table->string('prs_hic');
            $table->string('prs_dfu');
            $table->string('id');
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
		Schema::drop('programacionsepelios');
	}

}
