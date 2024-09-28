<?php

class Car
{
    protected $color;
    protected $fuelType;

    public function __construct($color, $fuelType){
        $this->color = $color;
        $this->fuelType = $fuelType;
   }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getFuelType()
    {
        return $this->fuelType;
    }

    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    public function __clone()
    {
        $this->color = 'black';
    }
}