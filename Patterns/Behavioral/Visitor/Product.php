<?php

class Product implements Entity
{
    protected string $title;
    protected float $price;

    public function accept(Visitor $visitor): void
    {
        $visitor->export($this);
    }
}