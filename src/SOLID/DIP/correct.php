<?php
/**
 * Пример соблюдения принципа инверсии зависимостей (Dependency Inversion Principle, DIP)
 */

interface Logger
{
    public function save(mixed $data): void;
}

class FileLogger implements Logger
{
    public function save(mixed $data): void
    {
        // сохраняем данные в файл
    }
}

class DbLogger implements Logger
{
    public function save(mixed $data): void
    {
        // сохраняем данные в БД
    }
}

class EmailLogger implements Logger
{
    public function save(mixed $data): void
    {
        // отправляем данные по email
    }
}

class Event
{
    public function __construct(private \Logger $logger)
    {
    }

    public function main()
    {
        // отправляем данные в лога, куда именно - зависит от реализации логгера
        $data = "some data";
        $this->logger->save($data);
    }
}

$event1 = new Event(new DbLogger);
$event2 = new Event(new FileLogger);
$event3 = new Event(new EmailLogger);