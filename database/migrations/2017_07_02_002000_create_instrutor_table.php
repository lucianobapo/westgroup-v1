<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstrutorTable extends BaseMigration {

	protected $table = 'instrutor';

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
            $table->string('funcao')->nullable();
            $table->string('idiomas')->nullable();
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
