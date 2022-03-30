<?php

namespace App\Reporters;
class OutputHtml implements OutputInterface
{
    public function format(int $price): string
    {
        return sprintf('<strong>%s %s</strong>', number_format($price, 0, ',', '.'), 'VND');
    }
}