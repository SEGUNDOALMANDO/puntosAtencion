<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCostCentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_cost_centers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('cost_center_id');
			$table->dateTime('date_register');
			$table->integer('user_register');
			$table->boolean('status');

			$table->foreign('user_id')
				->references('idusuario')->on('igh.usuario')
				->onDelete('cascade');

			$table->foreign('cost_center_id')
				->references('IdCC')->on('controlrec.centroscosto')
				->onDelete('cascade');

			$table->foreign('user_register')
				->references('idusuario')->on('igh.usuario')
				->onDelete('cascade');
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
		Schema::drop('user_cost_centers');
	}

}
