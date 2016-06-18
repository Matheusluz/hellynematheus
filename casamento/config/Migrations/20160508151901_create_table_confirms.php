<?php

use Phinx\Migration\AbstractMigration;

class CreateTableConfirms extends AbstractMigration
{
    public function up()
    {
        $confirmsTable = $this->table('confirms');
        $confirmsTable
            ->addColumn('name', 'string', ['length' => 300])
            ->addColumn('phone', 'string', ['length' => 15, 'null' => true])
            ->addColumn('email', 'string', ['length' => 50, 'null' => true])
            ->addColumn('message', 'text', ['null' => true])
            ->addColumn('quantidy', 'integer', ['default' => 1])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
    
    public function down()
    {
        $this->dropTable('confirms');
    }
}
