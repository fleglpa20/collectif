<?php

namespace App\Sections;

use App\Model\Orm;
use Nextras\Dbal\Connection;

class Details extends BaseSection
{
    public $item;
    public $spec;
    public $desc;
    public $single;
    public $formHeading;
    public $formSubheading;

    public function __construct(
        protected Connection $connection,
        protected Orm        $orm,
    )
    {
    }
    public function render()
    {
        $this->item = $this->connection->query("SELECT * FROM _table_nemovitosti WHERE id = %i", $this->presenter->getParameter("productId"))->fetch();
        $this->item->specifikace = trim($this->item->specifikace, "[");
        $this->item->specifikace = trim($this->item->specifikace, "]");
        $this->item->specifikace = explode(",", $this->item->specifikace);
        $this->spec = $this->connection->query("SELECT * FROM _table_specifikace WHERE id in %s[]", $this->item->specifikace)->fetchAll();

        $this->item->vlastnosti = trim($this->item->vlastnosti, "[");
        $this->item->vlastnosti = trim($this->item->vlastnosti, "]");
        $this->item->vlastnosti = explode(",", $this->item->vlastnosti);
        $this->desc = $this->connection->query("SELECT * FROM _table_vlastnosti WHERE id in %s[]", $this->item->vlastnosti)->fetchAll();

//        bdump($this->desc);
//        foreach ($this->spec as $single){
//        if ($single->svg){
//            $single->svg = $this->orm->folder->getBy(['id' => $this->item->photos]);
//        }
//            bdump($single);
//        }

//        bdump($single->svg);

//        bdump($this->item);

        $this->getTemplate()->render(TEMPLATES_DIR . '/Sections/Details.latte');
    }
}
