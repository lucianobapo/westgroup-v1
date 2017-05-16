<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateGestaoTable extends BaseMigration {

	protected $table = 'gestao';

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
            $table->string('curso')->nullable();
            $table->string('tipo')->nullable();
            $table->string('periodo')->nullable();
            $table->string('duracao')->nullable();
            $table->string('validade')->nullable();
            $table->string('status')->nullable();
            $table->string('nota_teorica')->nullable();
            $table->string('nota_pratica')->nullable();
            $table->string('certificado')->nullable();
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
