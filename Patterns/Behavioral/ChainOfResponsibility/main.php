<?php


$rawRequest = new FormData();

$middleware1 = new RequestHandler();
$middleware2 = new RequestHandler();
$middleware3 = new RequestHandler();

$middleware1->setNext($middleware2);
$middleware2->setNext($middleware3);

$filteredRequest = $middleware1->handle($rawRequest);