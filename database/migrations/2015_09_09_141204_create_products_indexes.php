<?php

use ErpNET\Migrates\BaseMigration;

class CreateProductsIndexes extends BaseMigration
{

    protected $table = 'products';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function upMigration()
    {
        $this->createIndex('deleted_at');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function downMigration()
    {
        $this->dropIndex('deleted_at');
    }
}
