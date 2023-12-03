<?php

namespace Patterns\SimpleFactory;

class SkodaCar implements Car
{

    public function __construct(
        private string $model,
        private string $color,
        private string $option
    ) {
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getOptionName(): string
    {
        return $this->option;
    }
}