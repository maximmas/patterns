<?php

namespace Maxim\Patterns\FactoryMethod;

abstract class AutoDealer
{

    protected Car $car;

    public function buy(string $model, string $color, string $option): Car
    {
        $this->car = $this->orderCar($model, $color, $option);
        $this->preSalePreparing();
        return $this->car;
    }


    /**
     * Предпродажная подготовка
     * Не зависит от модели, должен быть только объект типа Car.
     *
     * @return void
     */
    protected function preSalePreparing(): void
    {
        // ...
    }


    /**
     * Фабричный метод
     *
     * @return Car
     */
    abstract protected function orderCar(string $model, string $color, string $option): Car;

}