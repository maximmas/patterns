<?php

/**
 * Базовый класс фабрики
 */
abstract class AutoFactory
{

    /**
     * Фабричный метод (создающий)
     *
     * @return Car
     */
    abstract public function create(string $model, string $color, string $option): Car;


    /**
     * Фабрика может иметь и другие методы с логикой
     *
     * @return void
     */
    private function doSmth(){
        // doSmth
    }

}