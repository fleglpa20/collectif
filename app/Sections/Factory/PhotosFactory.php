<?php

namespace App\Sections\Factory;

use App\Sections\Photos;

interface PhotosFactory
{
    public function create(): Photos;
}
