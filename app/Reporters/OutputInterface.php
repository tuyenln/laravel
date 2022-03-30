<?php

namespace App\Reporters;

interface OutputInterface
{
    public function format(int $price): string;
}