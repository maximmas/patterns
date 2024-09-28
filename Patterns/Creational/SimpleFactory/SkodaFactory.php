<?php

class SkodaFactory
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
    public function make(string $model, string $color, string $option): Car
    {
        return match ($model) {
            'Octavia' => new SkodaCar('Octavia', $color, $option),
            'Rapid' => new SkodaCar('Rapid', $color, $option),
            'Kodiaq' => new SkodaCar('Kodiaq', $color, $option),
            default => throw new \Exception('invalid car model'),
        };
    }
}