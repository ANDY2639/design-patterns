<?php

require_once 'vendor/autoload.php';

use Anel\Creacionales\FactoryMethod\AppLogistic;

$app = new AppLogistic('Road');

echo "Logistica enviada: ";
echo $app->getTransport();
echo "\n";

