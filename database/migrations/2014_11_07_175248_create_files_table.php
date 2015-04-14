<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 60);
			$table->string('size', 60);
			$table->string('url');
			$table->boolean('status');
			$table->integer('activity_id')->unsigned();
			$table->string('name_disk');
			$table->string('extension', 6);

			$table->foreign('activity_id')
				->references('id')->on('activities')
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
		Schema::drop('files');
	}

}
