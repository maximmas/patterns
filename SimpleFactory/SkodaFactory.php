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
        switch ($model) {
            case 'Octavia':
                $car = new SkodaCar('Oktavia', $color, $option);
                break;
            case 'Rapid':
                $car = new SkodaCar('Rapid', $color, $option);
                break;
            case 'Kodiaq':
                $car = new SkodaCar('Kodiaq', $color, $option);
                break;
            default:
                throw new \Exception('invalid car model');
        }

        return $car;
    }

}