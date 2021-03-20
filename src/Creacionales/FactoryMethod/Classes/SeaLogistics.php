<?php

namespace Anel\Creacionales\FactoryMethod\Classes;

use Anel\Creacionales\FactoryMethod\Interfaces\ITransport;

class SeaLogistics extends Logistics
{
    public function planDelivery(): ITransport
    {
        return new Ship();
    }
}
