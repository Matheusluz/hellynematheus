<?php

use Phinx\Migration\AbstractMigration;

class AddConfirmToTableConfirms extends AbstractMigration
{
    public function up()
    {
        $confirmsTable = $this->table('confirms');
        $confirmsTable
            ->addColumn('confirm', 'boolean', ['null' => true])
            ->update();
    }
    public function down()
    {
        $confirmsTable = $this->table('confirms');
        $confirmsTable->removeColumn('confirm');
    }
}
