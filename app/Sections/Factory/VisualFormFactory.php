<?php

namespace App\Sections\Factory;

use App\Sections\VisualForm;

interface VisualFormFactory
{
    public function create(): VisualForm;
}
