<?php

namespace App\OpenClose;

class AreaCalculator {

    public function calculate (AreaInterface $areaInterface)
    {
        return $areaInterface->calculate();
    }
}