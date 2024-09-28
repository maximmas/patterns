<?php

namespace Patterns\Patterns\Creational\FactoryMethod;

class TeslaCar implements Car
{

    public function __construct(private string $model, private string $color, private string $option, private string $capacity)
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

    public function getEngineType(): string
    {
        return 'electric';
    }

    public function chargeBattery(): void
    {
        // do smth
    }
}