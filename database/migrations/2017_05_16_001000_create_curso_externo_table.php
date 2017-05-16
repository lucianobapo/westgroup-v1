<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoExternoTable extends BaseMigration {

	protected $table = 'curso_externo';

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
            $table->string('validade')->nullable();
            $table->string('preco')->nullable();
            $table->string('empresa')->nullable();
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
