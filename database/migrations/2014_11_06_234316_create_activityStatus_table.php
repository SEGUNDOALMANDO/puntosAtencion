<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activityStatus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('status_activity', 30);
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
		Schema::drop('activityStatus');
	}

}
