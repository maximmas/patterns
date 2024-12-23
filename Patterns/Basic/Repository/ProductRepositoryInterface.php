<?php

interface ProductRepositoryInterface
{
    public function create(Product $product): void;
    public function update(Product $product): void;
    public function delete(Product $product): void;
    public function findById(int $id): ?Product;
}