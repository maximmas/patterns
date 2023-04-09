<?php

class ToyotaCar implements Car
{


    public function __construct(private string $model, private string $color, private string $option)
    {
    }

    public function getModel(): string
    {
        return $this->model;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function getOption()
    {
        return $this->option;
    }
}