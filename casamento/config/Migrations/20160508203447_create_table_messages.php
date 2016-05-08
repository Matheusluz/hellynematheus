<?php

use Phinx\Migration\AbstractMigration;

class CreateTableMessages extends AbstractMigration
{
    public function up()
    {
        $messagesTable = $this->table('messages');
        $messagesTable
            ->addColumn('name', 'string', ['length' => 300, 'null' => false])
            ->addColumn('phone', 'integer')
            ->addColumn('email', 'string', ['length' => 50])
            ->addColumn('message', 'text', ['null' => false])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
    
    public function down()
    {
        $this->dropTable('messages');
    }
}
