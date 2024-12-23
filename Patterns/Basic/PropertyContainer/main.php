<?php

require_once __DIR__ . "/PropertyContainerInterface.php";
require_once __DIR__ . "/PropertyContainer.php";
require_once __DIR__ . "/Product.php";

$product = new Product;

// установка существующего свойства
$product->setPrice(900);
$product->setTitle("Sneakers");

// установка  свойства
$product->setProperty("Size", "XXL");
$product->setProperty("Color", "White");

$text = "Product information:\n";
$text .="Title: " . $product->getTitle() . PHP_EOL;
$text .="Size: " . $product->getProperty("Size") . PHP_EOL;
$text .="Color: " . $product->getProperty("Color") . PHP_EOL;
$text .="Price: " . $product->getPrice() . PHP_EOL;

echo $text;