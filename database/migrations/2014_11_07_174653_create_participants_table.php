<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('activity_id')->unsigned();
			$table->integer('type_participant_id')->unsigned();
			$table->boolean('status');
			$table->dateTime('date_register');
			$table->integer('user_register');

			$table->foreign('user_id')
				->references('idusuario')->on('igh.usuario')
				->onDelete('cascade');

			$table->foreign('activity_id')
				->references('id')->on('activities')
				->onDelete('cascade');

			$table->foreign('type_participant_id')
				->references('id')->on('types_participants')
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
		Schema::drop('participants');
	}

}
