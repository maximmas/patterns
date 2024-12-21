<?php

class AccountVisitor implements Visitor
{

    public function export(Entity $entity)
    {
        echo $this->id . PHP_EOL;
        echo $this->amount . PHP_EOL;
        // сохраняем в файл
    }
}