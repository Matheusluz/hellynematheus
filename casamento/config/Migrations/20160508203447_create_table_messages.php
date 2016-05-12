<?php

use Phinx\Migration\AbstractMigration;

class CreateTableMessages extends AbstractMigration
{
    public function up()
    {
        $messagesTable = $this->table('messages');
        $messagesTable
            ->addColumn('name', 'string', ['length' => 300])
            ->addColumn('phone', 'integer', ['null' => true])
            ->addColumn('email', 'string', ['length' => 50, 'null' => true])
            ->addColumn('message', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
    
    public function down()
    {
        $this->dropTable('messages');
    }
}
