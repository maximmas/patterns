<?php

class ToyotaFactory
{

    /**
     * Возвращает экземпляр автомобиля Toyota c требуемыми параметрами
     *
     * @param string $model
     * @param string $color
     * @param string $option
     * @return ToyotaCar
     * @throws Exception
     *
     */
    public function make(string $model, string $color, string $option): Car
    {
        switch ($model) {
            case 'Camry':
                $car = new ToyotaCar('Camry', $color, $option);
                break;
            case 'Corolla':
                $car = new ToyotaCar('Corolla', $color, $option);
                break;
            case 'Hilux':
                $car = new ToyotaCar('Hilux', $color, $option);
                break;
            default:
                throw new \Exception('invalid car model');
        }

        return $car;
    }

}