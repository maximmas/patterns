<?php

$toyotaFactory = new ToyotaFactory();
$skodaFactory = new SkodaFactory();

$car1 = $toyotaFactory->make('Camry', 'black', 'Premium');
$car2 = $toyotaFactory->make('Corolla', 'white', 'Classic');
$car3 = $skodaFactory->make('Octavia', 'black', 'Family');
$car4 = $skodaFactory->make('Kodiaq', 'white', 'Classic');

echo "Model: " . $car1->getModel() . PHP_EOL;
echo "Option: " . $car1->getOptionName() . PHP_EOL;
echo "Color: " . $car1->getColor() . PHP_EOL;