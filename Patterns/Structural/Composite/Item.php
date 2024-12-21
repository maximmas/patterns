<?php

class Item implements Menu
{
    protected string $title;

    public function __construct(string $title){
        $this->title = $title;
    }

    public function render(): void
    {
        echo "Menu item : {$this->title}" . PHP_EOL;
    }
}