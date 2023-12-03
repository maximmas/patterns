<?php

namespace Patterns\AbstractFactory;

abstract class Factory
{
    abstract public function makeCar(string $model, string $color, string $option): Car;
    abstract public function makeSparePartsKit(string $model): SparePartsKit;
}