<?php
require_once dirname(__DIR__,2) . '/vendor/autoload.php';

use \Patterns\SimpleFactory\ToyotaFactory;
use \Patterns\SimpleFactory\SkodaFactory;

$toyotaFactory = new ToyotaFactory();
$skodaFactory = new SkodaFactory();

$stock[] = [
    'brand' => 'Toyota',
    'car' => $toyotaFactory->make('Camry', 'black', 'Premium')
];
$stock[] = [
    'brand' => 'Toyota',
    'car' => $toyotaFactory->make('Corolla', 'white', 'Classic')
];

$stock[] = [
    'brand' => 'Skoda',
    'car' => $skodaFactory->make('Octavia', 'black', 'Family')
];

$stock[] = [
    'brand' => 'Skoda',
    'car' => $skodaFactory->make('Kodiaq', 'white', 'Classic')
];

foreach ($stock as $item) {
    echo "Brand: " . $item['brand'] . PHP_EOL;
    echo "Model: " . $item['car']->getModel() . PHP_EOL;
    echo "Option: " . $item['car']->getOptionName() . PHP_EOL;
    echo "Color: " . $item['car']->getColor() . PHP_EOL;
    echo "=======================" . PHP_EOL;
}