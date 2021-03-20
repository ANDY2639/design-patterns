<?php

namespace Anel\Creacionales\FactoryMethod\Classes;

use Anel\Creacionales\FactoryMethod\Interfaces\ITransport;

abstract class Logistics
{
    abstract public function planDelivery(): ITransport;

    public function createTransport(): string
    {
        $transport = $this->planDelivery();
        return $transport->deliver();
    }
}