<?php
require_once dirname(__DIR__,2) . '/vendor/autoload.php';

use \Patterns\AbstractFactory\ToyotaFactory;
use \Patterns\AbstractFactory\SkodaFactory;

$toyotaFactory = new ToyotaFactory();
$skodaFactory = new SkodaFactory();

$stock[] = [
    'brand' => 'Toyota',
    'car' => $toyotaFactory->makeCar('Camry', 'black', 'Premium'),
    'spareParts' => $toyotaFactory->makeSparePartsKit('Camry'),
];
$stock[] = [
    'brand' => 'Toyota',
    'car' => $toyotaFactory->makeCar('Corolla', 'white', 'Classic'),
    'spareParts' => $toyotaFactory->makeSparePartsKit('Corolla'),
];
$stock[] = [
    'brand' => 'Skoda',
    'car' => $skodaFactory->makeCar('Octavia', 'black', 'Family'),
    'spareParts' => $skodaFactory->makeSparePartsKit('Octavia')
];

$stock[] = [
    'brand' => 'Skoda',
    'car' => $skodaFactory->makeCar('Kodiaq', 'white', 'Classic'),
    'spareParts' => $skodaFactory->makeSparePartsKit('Kodiaq')
];

foreach ($stock as $item) {
    echo "Brand: " . $item['brand'] . PHP_EOL;
    echo "Model: " . $item['car']->getModel() . PHP_EOL;
    echo "Option: " . $item['car']->getOptionName() . PHP_EOL;
    echo "Color: " . $item['car']->getColor() . PHP_EOL;
    echo "VIN: " . $item['car']->getVIN() . PHP_EOL;
    echo "Spare Parts Kit: " . json_encode([...$item['spareParts']->getEngineParts(), ...$item['spareParts']->getBodyParts()]) . PHP_EOL;
    echo "=======================" . PHP_EOL;
}