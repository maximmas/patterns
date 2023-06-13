<?php

class ToyotaFactory implements Factory
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
        return match ($model) {
            'Camry' => new ToyotaCar('Camry', $color, $option),
            'Corolla' => new ToyotaCar('Corolla', $color, $option),
            'Hilux' => new ToyotaCar('Hilux', $color, $option),
            default => throw new \Exception('invalid car model'),
        };

    }

}