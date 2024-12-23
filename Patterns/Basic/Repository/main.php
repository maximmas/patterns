<?php

require_once  __DIR__ . "/ProductRepository.php";

$product = new Product;
(new ProductRepository)->create($product);
