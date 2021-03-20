<?php

namespace Anel\Creacionales\FactoryMethod\Classes;

use Anel\Creacionales\FactoryMethod\Interfaces\ITransport;

class RoadLogistics extends Logistics
{
    public function planDelivery(): ITransport
    {
        return new Truck();
    }
}
