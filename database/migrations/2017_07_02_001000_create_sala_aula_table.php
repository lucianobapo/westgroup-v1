<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalaAulaTable extends BaseMigration {

	protected $table = 'sala_aula';

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
            $table->string('local')->nullable();
            $table->string('capacidade')->nullable();
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
