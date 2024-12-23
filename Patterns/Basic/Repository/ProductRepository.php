<?php

class ProductRepository implements ProductRepositoryInterface
{

    public function create(Product $product): void
    {
        // save new product in DB
    }

    public function update(Product $product): void
    {
        // update product in DB
    }

    public function delete(Product $product): void
    {
        // remove product from DB
    }

    public function findById(int $id): ?Product
    {
        // find product in DB
    }
}