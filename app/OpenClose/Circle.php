<?php

namespace App\OpenClose;

class Circle implements AreaInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculate()
    {
        return $this->radius * $this->radius * pi();
    }
}