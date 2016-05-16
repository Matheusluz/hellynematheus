<?php
use Migrations\AbstractMigration;

class AddColumnsConfirmsIdToMessages extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('messages');
        $table
            ->addColumn('confirm_id', 'integer', ['null' => true])
            ->update();
    }
    public function down()
    {
        $table = $this->table('messages');
        $table->removeColumn('confirm_id');
    }
}
