<?php

namespace App\Sections;

use App\Model\Orm;
use Nette\Database\Connection;

class ListRooms extends BaseSection
{
    public $items;
    public function __construct(
        protected Connection $connection,
        protected Orm $orm,
    ){}
    public function render()
    {
        $this->items = $this->connection->query('SELECT * FROM _table_nemovitosti WHERE active = 1 ORDER BY position')->fetchAll();
        if ($this->items) {
            foreach ($this->items as $item){

                if ($item->photos){
                    $item->photos = $this->orm->folder->getBy(['id' => $item->photos]);
                }
            }
        }

        $this->getTemplate()->render(TEMPLATES_DIR . '/Sections/ListRooms.latte');
    }
}
