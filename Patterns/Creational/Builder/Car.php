<?php

class Car
{
    private $model;
    private $body;
    private $fuel;
    private $engineVolume;
    private $mediaType;
    private $light;

    public function __construct(CarBuilder $builder)
    {
        $this->model = $builder->model;
        $this->body = $builder->body;
        $this->fuel = $builder->fuel;
        $this->engineVolume = $builder->engineVolume;
        $this->mediaType = $builder->mediaType;
        $this->light = $builder->light;
    }
}