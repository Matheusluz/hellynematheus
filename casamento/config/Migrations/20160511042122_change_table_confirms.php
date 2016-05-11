<?php

use Phinx\Migration\AbstractMigration;

class ChangeTableConfirms extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('confirms');
        $table->addColumn('quantidy', 'integer', [
                'default' => 1,
                'null' => false
            ])
              ->update();
    }
    
    public function down()
    {
        $table = $this->table('confirms');
        $table->removeColumn('quantidy');
    }
}
