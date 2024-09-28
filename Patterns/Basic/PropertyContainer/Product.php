<?php
require_once "PropertyContainer.php";


class Product extends PropertyContainer
{
    private string $title;
    private int $price;

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }
}