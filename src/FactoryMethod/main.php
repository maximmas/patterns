#!/usr/bin/php
<?php

require_once '../../vendor/autoload.php';

$teslaDealer = new Maxim\Patterns\FactoryMethod\TeslaDealer;
$multiDealer = new Maxim\Patterns\FactoryMethod\MultiBrandDealer;

$car1 = $teslaDealer->buy('Model S', 'black', 'Premium');
$car2 = $multiDealer->buy('Model X', 'green', 'Sport');
$car3 = $multiDealer->buy('Camry', 'white', 'Prestige');
$car4 = $multiDealer->buy('Camaro', 'white', 'Prestige');
