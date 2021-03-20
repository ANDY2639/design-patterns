<?php

namespace Anel\Creacionales\FactoryMethod\Classes;

use Anel\Creacionales\FactoryMethod\Interfaces\ITransport;

class Truck implements ITransport
{
    public function deliver(): string
    {
        return "por tierra en una caja.";
    }
}
