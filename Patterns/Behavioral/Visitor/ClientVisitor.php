<?php

class ClientVisitor implements Visitor
{

    public function export(Entity $entity)
    {
        echo $this->name . PHP_EOL;
        echo $this->email . PHP_EOL;
        // сохраняем в файл
    }
}