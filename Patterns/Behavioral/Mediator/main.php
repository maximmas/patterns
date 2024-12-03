<?php

require_once __DIR__ . '/Host.php';
require_once __DIR__ . '/Participant.php';

$host = new Host();

$person1 = new Participant(1, $host);
$person2 = new Participant(2, $host);
$person3 = new Participant(3, $host);

$person1->placeBet(100);
$person2->placeBet(150);
$person3->placeBet(150.5);