<?php

require_once "Product.php";

$product = new Product;

// установка существующего свойства
$product->setPrice(900);
$product->setTitle("Sneakers");

// установка  свойства
$product->setProperty("Size", "XXL");
$product->setProperty("Color", "White");

$text = "Information about product:\n";
$text .="Title: " . $product->getTitle() . PHP_EOL;
$text .="Size: " . $product->getProperty("Size") . PHP_EOL;
$text .="Color: " . $product->getProperty("Color") . PHP_EOL;
$text .="Price: " . $product->getPrice() . PHP_EOL;

echo $text;