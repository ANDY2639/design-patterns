<?php

namespace Anel\Creacionales\FactoryMethod\Classes;

use Anel\Creacionales\FactoryMethod\Interfaces\ITransport;

class Ship implements ITransport
{
    public function deliver(): string
    {
        return "por mar en un contenedor.";
    }
}
