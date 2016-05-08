<?php

use Phinx\Migration\AbstractMigration;

class CreateTableConfirms extends AbstractMigration
{
    public function up()
    {
        $confirmsTable = $this->table('confirms');
        $confirmsTable
            ->addColumn('name', 'string', ['length' => 300, 'null' => false])
            ->addColumn('phone', 'integer')
            ->addColumn('email', 'string', ['length' => 50])
            ->addColumn('message', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
    
    public function down()
    {
        $this->dropTable('confirms');
    }
}
