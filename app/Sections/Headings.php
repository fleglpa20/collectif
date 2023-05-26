<?php

namespace App\Sections;
use Nextras\Dbal\Connection;

class Headings extends BaseSection
{
    public $heading;
    public $title;

    public function __construct(
        protected Connection $connection,
    ){}
    public function render()
    {
        //bdump($this->presenter->getParameter("productId"));
        //$row = $this->connection->query("SELECT * FROM _table_nemovitosti WHERE id = %i", $this->presenter->getParameter("productId"))->fetch();
        //$this->getTemplate()->row=$row;
        $this->getTemplate()->render(TEMPLATES_DIR . '/Sections/Headings.latte');
    }
}
