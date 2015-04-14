<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubtopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subtopics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subtopic', 100);
			$table->boolean('status');
			$table->dateTime('date_register');
			$table->integer('user_register');

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
		Schema::drop('subtopics');
	}

}
