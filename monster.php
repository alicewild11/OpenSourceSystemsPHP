<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    public function change()
    {
        $users = $this->table('monsters');
        $users->addColumn('name', 'varchar', ['limit' => 20])
              ->addColumn('image', 'blob')
            
              ->create();
    }
}
