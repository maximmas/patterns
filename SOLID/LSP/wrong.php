<?php

interface Figure
{
    public function setHeight(int $value): void;
    public function setWidth(int $value): void;
    public function getArea(): int;
}

class Rectangle implements Figure{
    protected $width;
    protected $height;

    public function setHeight(int $value): void
    {
        $this->height = $value;
    }
    public function setWidth(int $value): void
    {
        $this->width = $value;
    }
    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function setWidth(int $value): void
    {
        $this->width = $value;
        $this->height = $value;
    }

    public function setHeight(int $value): void
    {
        $this->width = $value;
        $this->height = $value;
    }
}

// клиент
class App{
    public function createFigure(Figure $figure)
    {
        $figure->setHeight(2);
        $figure->setWidth(3);
        return $figure;
    }
}

$app = new App();
$figure = $app->createFigure(new Rectangle);
assertTrue($figure->getArea(), 6); // true

$figure = $app->createFigure(new Square);
assertTrue($figure->getArea(), 6); // FALSE