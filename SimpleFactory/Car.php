<?php

interface Car
{

    /**
     * Модель автомобиля
     *
     * @return mixed
     *
     */
    public function getModel(): string;


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
    public function getOption(): string;

}