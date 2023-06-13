<?php

namespace Maxim\Patterns\FactoryMethod;

class MultiBrandDealer extends AutoDealer
{

    protected Car $car;

    protected function orderCar($model, $color, $option): Car
    {
        return match(true){
            in_array($model, ['Type X', 'Type S']) => new TeslaCar($model, $color, $option),
            in_array($model, ['Camry', 'Corolla']) => new ToyotaCar($model, $color, $option),
            default => throw new \Exception('Нельзя заказать такую модель')
        };
    }
}