<?php


$toyotaFactory = new ToyotaFactory();
$skodaFactory = new SkodaFactory();


$car1 = $toyotaFactory->makeCar('Camry', 'black', 'Premium');
$car1spareParts = $toyotaFactory->makeSparePartsKit('Camry');

$car2 = $toyotaFactory->makeCar('Corolla', 'white', 'Classic');
$car2spareParts = $toyotaFactory->makeSparePartsKit('Corolla');

$car3 = $skodaFactory->makeCar('Octavia', 'black', 'Family');
$car3spareParts = $skodaFactory->makeSparePartsKit('Octavia');

$car4 = $skodaFactory->makeCar('Kodiaq', 'white', 'Classic');
$car4spareParts = $skodaFactory->makeSparePartsKit('Kodiaq');

echo "Model: " . $car1->getModel();
echo "Option: " . $car1->getOptionName();
echo "Color: " . $car1->getColor();
echo "VIN: " . $car1->getVIN();
echo "Spare Parts Kit: " . json_encode([...$car1spareParts->getEngineParts(), ...$car1spareParts->getBodyParts()]);