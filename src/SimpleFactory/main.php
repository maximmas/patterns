<?php

$toyotaFactory = new ToyotaFactory();
$skodaFactory = new SkodaFactory();

$car1 = $toyotaFactory->make('Camry', 'black', 'Premium');
$car2 = $toyotaFactory->make('Corolla', 'white', 'Classic');

$car3 = $skodaFactory->make('Octavia', 'black', 'Family');
$car4 = $toyotaFactory->make('Kodiaq', 'white', 'Classic');