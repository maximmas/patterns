<?php

class CarBuilder
{
    public $model;
    public $body;
    public $fuel;
    public $engineVolume;
    public $mediaType;
    public $light;

    public function __construct($model)
    {
        $this->model = $model;
        $this->body = 'default body for this model';
        $this->fuel = 'gasoline';
        $this->engineVolume =  1.6;
        $this->mediaType = 'Simple';
        $this->light = 'Standard';
    }

    public function setBody($bodyType): self
    {
        $this->body = $bodyType;
        return $this;
    }

    public function setFuel($fuelType): self
    {
        $this->fuel = $fuelType;
        return $this;
    }

    public function setEngineVolume($engineVolume): self
    {
        $this->engineVolume = $engineVolume;
        return $this;
    }

    public function setMediaType($mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    public function setLight($light): self
    {
        $this->light = $light;
        return $this;
    }

    public function build(): Car
    {
        return new Car($this);
    }

}