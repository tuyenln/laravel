<?php
namespace App\Reporters;

use App\Reporters\OutputHtml;
use Illuminate\Support\Carbon;
use App\Repositories\OrderRepository;

class OrderReporter
{

    private $orderRepository;
    private $outputHtml;

    public function __construct(OrderRepository $orderRepository, OutputHtml $outputHtml)
    {
        $this->orderRepository = $orderRepository;
        $this->outputHtml = $outputHtml;
    }

    public function between(Carbon $from, Carbon $to)
    {
        $orderPrice = $this->orderRepository->getPriceBetween($from, $to);
        return $this->outputHtml->format($orderPrice);
    }
}