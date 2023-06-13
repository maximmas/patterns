<?php

namespace Maxim\Patterns\FactoryMethod;

class TeslaDealer extends AutoDealer
{

    protected function orderCar($model, $color, $option): Car
    {
        return new TeslaCar($model, $color, $option);
    }
}