<?php

namespace Anel\Creacionales\FactoryMethod;

use Anel\Creacionales\FactoryMethod\Classes\SeaLogistics;
use Anel\Creacionales\FactoryMethod\Classes\RoadLogistics;

class AppLogistic
{
    private $logistics = null;

    public function __construct($logistics)
    {
        $this->logistics = $logistics;
    }

    public function getTransport()
    {
        $logistics = null;

        try {
            switch ($this->logistics) {
                case 'Road':
                    $logistics = new RoadLogistics();
                    break;
                case 'Sea':
                    $logistics = new SeaLogistics();;
                    break;
                default:
                    throw new \Exception("Error Processing Request", 1);
                    break;
            }
        } catch (\Throwable $th) {
            throw $th;
        }

        return $logistics->createTransport();
    }
}
