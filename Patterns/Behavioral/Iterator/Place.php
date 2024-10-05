<?php

class Place
{

    public function __construct(protected array $location)
    {
    }

    public function getLocationName(): string
    {
        return $this->location['name'];
    }
}