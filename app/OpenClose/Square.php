<?php

namespace App\OpenClose;

use App\OpenClose\AreaInterface;

class Square implements AreaInterface
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculate()
    {
        return $this->width * $this->height;
    }
}