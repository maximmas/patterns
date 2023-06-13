<?php

namespace Maxim\Patterns\FactoryMethod;

class TeslaCar implements Car
{

    public function __construct(private string $model, private string $color, private string $option)
    {
    }

    public function getModel(): string
    {
        return $this->model;
    }


    public function getColor(): string
    {
        return $this->color;
    }


    public function getOption(): string
    {
        return $this->option;
    }
}