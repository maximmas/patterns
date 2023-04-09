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
     * @return mixed
     *
     */
    public function getColor();


    /**
     * Название комплектации
     *
     * @return mixed
     *
     */
    public function getOption();

}