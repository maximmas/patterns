<?php
/**
 *  Псевдокод
 */

$repository = new Repository;

// Вариант 1
$app = new App($repository);

// Вариант 2
$app->setRepository($repository);

// Вариант 3
$app->repository = $repository;