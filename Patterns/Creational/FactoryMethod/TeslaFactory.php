<?php

/**
 * Подкласс фабрики
 */
class TeslaFactory extends AutoFactory
{
    private Car $car;

    public function create($model, $color, $option): Car
    {
        if($option === 'Premium'){
            $capacity = 100500;
        } else{
            $capacity = 100;
        }
        $this->car = new TeslaCar($model, $color, $option, $capacity);
        $this->preReleaseChecking();
        return $this->car;
    }

    /**
     * Финальная проверка
     *
     * @return void
     */
    private function preReleaseChecking(){
        $this->car->chargeBattery();
    }
}