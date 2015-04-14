<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('idusuario');
            $table->string('usuario', 45)->nullable();
            $table->string('clave', 45)->nullable();
            $table->string('nombre', 45);
            $table->string('apaterno', 45);
            $table->string('amaterno', 45);
            $table->string('correo', 45)->nullable();
            $table->string('extension', 45)->nullable();
            $table->datetime('fnacimiento');
            $table->string('foto', 45)->nullable();
            $table->string('soporte', 45)->nullable();
            $table->smallInteger('usuario_estado')->default(1);
            $table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('idubicacion');
            $table->integer('idempresa');
            $table->integer('iddepartamento');
            $table->integer('idtitulo');
            $table->integer('idgenero');
            $table->string('rfc', 20)->nullable();
            $table->integer('idpuesto')->unsigned();
            $table->rememberToken();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
