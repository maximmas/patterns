<?php


/**
 * Интрефейс продукта
 */
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


    /**
     * Тип двигателя
     *
     * @return string
     *
     */
    public function getEngineType(): string;

}