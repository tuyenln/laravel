<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Carbon;

class OrderRepository 
{

    public function getPriceBetween(Carbon $from, Carbon $to): int
    {
        return Order::query()->whereBetween('created_at', [$from, $to])->sum('price');
    }
}