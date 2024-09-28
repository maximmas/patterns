<?php

$teslaDealer = new TeslaFactory;
$toyotaDealer = new ToyotaDealer;

$car1 = $teslaDealer->create('Model S', 'black', 'Premium');
$car2 = $teslaDealer->create('Model X', 'green', 'Sport');
$car3 = $toyotaDealer->create('Camry', 'white', 'Prestige');
$car4 = $toyotaDealer->create('Land Cruiser', 'white', 'Prestige');