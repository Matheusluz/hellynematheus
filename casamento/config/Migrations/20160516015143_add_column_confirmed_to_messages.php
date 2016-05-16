<?php
use Migrations\AbstractMigration;

class AddColumnConfirmedToMessages extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('messages');
        $table
            ->addColumn('confirmed', 'boolean', ['null' => true])
            ->update();
    }
    public function down()
    {
        $table = $this->table('messages');
        $table->removeColumn('confirm_id');
    }
}
