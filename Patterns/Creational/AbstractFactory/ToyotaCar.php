<?php

namespace Patterns\Patterns\Creational\AbstractFactory;

class ToyotaCar implements Car
{

    private string $VIN;

    public function __construct(
        private string $model,
        private string $color,
        private string $option
    ) {
        $this->VIN =strtoupper(substr(md5(openssl_random_pseudo_bytes(20)),-17));
    }

    public function getVIN(): string
    {
        return $this->VIN;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getOptionName(): string
    {
        return $this->option;
    }
}