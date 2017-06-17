<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendaTreinamentoTable extends BaseMigration {

	protected $table = 'agenda_treinamento';

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
            $table->string('data')->nullable();
            $table->string('empresa')->nullable();
            $table->string('transporte')->nullable();
            $table->string('nome_transporte')->nullable();
            $table->string('hotel')->nullable();
            $table->string('nome_hotel')->nullable();
            $table->string('curso1')->nullable();
            $table->string('curso1_data')->nullable();
            $table->string('curso1_duração')->nullable();
            $table->string('curso1_nome_sala')->nullable();
            $table->string('curso1_instrutor')->nullable();
            $table->string('curso2')->nullable();
            $table->string('curso2_data')->nullable();
            $table->string('curso2_duração')->nullable();
            $table->string('curso2_nome_sala')->nullable();
            $table->string('curso2_instrutor')->nullable();
            $table->string('curso3')->nullable();
            $table->string('curso3_data')->nullable();
            $table->string('curso3_duração')->nullable();
            $table->string('curso3_nome_sala')->nullable();
            $table->string('curso3_instrutor')->nullable();
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
