<?php

class SkodaFactory extends Factory
{

    /**
     * Возвращает экземпляр автомобиля Skoda c требуемыми параметрами
     *
     * @param string $model
     * @param string $color
     * @param string $option
     * @return SkodaCar
     * @throws Exception
     *
     */
    public function makeCar(string $model, string $color, string $option): Car
    {
        return match ($model) {
            'Octavia' => new SkodaCar('Octavia', $color, $option),
            'Kodiaq' => new SkodaCar('Kodiaq', $color, $option),
            default => throw new \Exception('invalid car model'),
        };
    }

    public function makeSparePartsKit(string $model): SparePartsKit
    {
        return match ($model) {
            'Octavia' => new SkodaSparePartsKit('Octavia'),
            'Kodiaq' => new SkodaSparePartsKit('Kodiaq'),
            default => new SkodaSparePartsKit('General Skoda Models'),
        };
    }
}