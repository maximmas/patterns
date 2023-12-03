<?php

namespace Patterns\AbstractFactory;

interface Car
{

    /**
     * Модель автомобиля
     *
     * @return string
     *
     */
    public function getModel(): string;

    /**
     * Номер VIN
     *
     * @return string
     *
     */
    public function getVIN(): string;

    /**
     * Цвет автомобиля
     *
     * @return string
     *
     */
    public function getColor(): string;

    /**
     * Название комплектации
     *
     * @return string
     *
     */
    public function getOptionName(): string;
}