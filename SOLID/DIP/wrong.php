<?php
/**
 * Пример нарушения принципа инверсии зависимостей (Dependency Inversion Principle, DIP)
 */

class Event
{
    public function __construct(private FileLogger $logger)
    {
    }

    public function main()
    {
        // сохраняем данные в файле лога
        $data = "some data";
        $this->logger->save($data);
    }
}