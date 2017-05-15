<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoInternoTable extends BaseMigration {

	protected $table = 'curso_interno';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function upMigration()
	{
        $this->createTable(function (Blueprint $table) {
            $table->increments('id');
            $table->timestampsTz();
            $table->softDeletes();
            $table->string('nome')->nullable();
            $table->string('carga_horaria')->nullable();
            $table->string('holograma')->nullable();
            $table->string('validade')->nullable();
            $table->string('anexo')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function downMigration()
	{
        $this->dropTable();
	}

}
