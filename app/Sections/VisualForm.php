<?php

namespace App\Sections;

class VisualForm extends BaseSection
{

    public $title;
    public $heading;
    public $image;

    public function render()
    {
        $this->getTemplate()->render(TEMPLATES_DIR . '/Sections/VisualForm.latte');
    }
}
