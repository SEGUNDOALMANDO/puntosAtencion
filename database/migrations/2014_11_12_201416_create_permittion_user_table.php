<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermittionUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permittion_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('permission_id')->unsigned();
			$table->integer('user_id');

			$table->foreign('permission_id')
				->references('id')->on('permittions')
				->onDelete('cascade');

			$table->foreign('user_id')
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
		Schema::drop('permittion_user');
	}

}
