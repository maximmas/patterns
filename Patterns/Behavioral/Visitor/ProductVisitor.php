<?php

class ProductVisitor implements Visitor
{

    public function export(Entity $entity)
    {
        echo $this->title . PHP_EOL;
        echo $this->price . PHP_EOL;
        // сохраняем в файл
    }
}