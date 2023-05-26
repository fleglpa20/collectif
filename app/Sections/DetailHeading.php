<?php

namespace App\Sections;

use App\Model\Orm;
use Nextras\Dbal\Connection;


class DetailHeading extends BaseSection
{
    public $item;
    public function __construct(
        protected Connection $connection,
        protected Orm $orm,
    ){}
    public function render()
    {
        $this->item = $this->connection->query("SELECT * FROM _table_nemovitosti WHERE id = %i", $this->presenter->getParameter("productId"))->fetch();
        $this->getTemplate()->render(TEMPLATES_DIR . '/Sections/DetailHeading.latte');
    }
}
