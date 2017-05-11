<?php

use ErpNET\Migrates\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class AlterPartnersTable extends BaseMigration {

	protected $table = 'partners';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function upMigration()
	{
        $this->alterTable(function (Blueprint $table) {
            $table->string('admissao')->nullable();
            $table->string('cpf')->nullable();
            $table->string('identidade')->nullable();
            $table->string('passaporte')->nullable();
            $table->string('matricula')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable();
            $table->string('gerencia')->nullable();
            $table->string('unidade')->nullable();
            $table->string('departamento')->nullable();
            $table->string('funcao')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('email')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function downMigration()
	{
        $this->dropColumn('admissao');
        $this->dropColumn('cpf');
        $this->dropColumn('identidade');
        $this->dropColumn('passaporte');
        $this->dropColumn('matricula');
        $this->dropColumn('endereco');
        $this->dropColumn('numero');
        $this->dropColumn('complemento');
        $this->dropColumn('bairro');
        $this->dropColumn('cidade');
        $this->dropColumn('estado');
        $this->dropColumn('pais');
        $this->dropColumn('gerencia');
        $this->dropColumn('unidade');
        $this->dropColumn('departamento');
        $this->dropColumn('funcao');
        $this->dropColumn('telefone1');
        $this->dropColumn('telefone2');
        $this->dropColumn('email');
	}

}
