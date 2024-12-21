<?php


$client = new Client;
$product = new Product;
$account = new Account;

// делаем экспорт
$client->accept(new ClientVisitor);
$account->accept(new AccountVisitor);
$product->accept(new ProductVisitor);

