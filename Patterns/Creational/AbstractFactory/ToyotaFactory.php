<?php

class ToyotaFactory extends Factory
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
    public function makeCar(string $model, string $color, string $option): Car
    {
        return match ($model) {
            'Camry' => new ToyotaCar('Camry', $color, $option),
            'Corolla' => new ToyotaCar('Corolla', $color, $option),
            'Hilux' => new ToyotaCar('Hilux', $color, $option),
            default => throw new \Exception('invalid car model'),
        };
    }

    public function makeSparePartsKit(string $model): SparePartsKit
    {
        return match ($model) {
            'Camry' => new ToyotaSparePartsKit('Camry'),
            'Corolla' => new ToyotaSparePartsKit('Corolla'),
            'Hilux' => new ToyotaSparePartsKit('Hilux'),
             default => new ToyotaSparePartsKit('General Toyota Models'),
        };
    }
}