<?php

/**
 * Подкласс фабрики
 */
class ToyotaFactory extends AutoFactory
{
    private Car $car;

    public function create($model, $color, $option): Car
    {
        $this->car = new ToyotaCar($model, $color, $option);
        $this->preReleaseChecking();
        return $this->car;
    }


    /**
     * Финальная проверка
     *
     * @return void
     */
    private function preReleaseChecking(){
        // doSmth with $this->car
    }
}