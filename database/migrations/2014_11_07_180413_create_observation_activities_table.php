<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObservationActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('observation_activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->unsigned();
			$table->text('observations');
			$table->dateTime('date_register');
			$table->integer('user_register');
			$table->integer('file_id')->unsigned()->nullable();
			$table->boolean('status');

			$table->foreign('activity_id')
				->references('id')->on('activities')
				->onDelete('cascade');

			$table->foreign('user_register')
				->references('idusuario')->on('igh.usuario')
				->onDelete('cascade');

			$table->foreign('file_id')
				->references('id')->on('files')
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
		Schema::drop('observation_activities');
	}

}
