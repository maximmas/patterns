<?php

interface Factory
{

    /**
     * Возвращает экземпляр автомобиля c требуемыми параметрами
     *
     * @param string $model
     * @param string $color
     * @param string $option
     * @return SkodaCar
     * @throws Exception
     *
     */
    public function make(string $model, string $color, string $option): Car;

}