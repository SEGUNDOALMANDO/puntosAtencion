<?php
//2014_11_06_234011
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('topic_id')->unsigned()->nullable();
			$table->integer('subtopic_id')->unsigned()->nullable();
			$table->text('activity');
			$table->integer('priority');
			$table->dateTime('date_start');
			$table->integer('status_activity_id')->unsigned()->nullable();;
			$table->integer('advance')->default(0);
			$table->dateTime('date_limit')->nullable();
			$table->dateTime('date_end')->nullable();;
			$table->enum('semaphore', array(1,2,3))->nullable();
			$table->enum('recurrent', array('SI', 'NO'))->nullable();
			$table->dateTime('date_register')->nullable();
			$table->integer('user_register');
			$table->boolean('status')->default(1);
			$table->integer('proyect_id')->unsigned()->nullable();
			$table->integer('centroCosto_id')->nullable();
			$table->integer('ubication_id')->nullable();

			$table->foreign('topic_id')
				->references('id')->on('topics')
				->onDelete('cascade');

			$table->foreign('subtopic_id')
				->references('id')->on('subtopics')
				->onDelete('cascade');

			$table->foreign('status_activity_id')
				->references('id')->on('activityStatus')
				->onDelete('cascade');

			$table->foreign('user_register')
				->references('idusuario')->on('igh.usuario')
				->onDelete('cascade');

			$table->foreign('proyect_id')
				->references('id')->on('proyects')
				->onDelete('cascade');

			$table->foreign('centroCosto_id')
				->references('idCC')->on('controlrec.centroscosto')
				->onDelete('cascade');

			$table->foreign('ubication_id')
				->references('idUbicacion')->on('igh.ubicacion')
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
		Schema::drop('activities');
	}

}
