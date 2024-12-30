<?php

interface Report
{
    public function save(array $data): void;
}

class  ExportReport implements Report
{
    public function save(array $data): void
    {
        file_put_contents("report.txt", json_encode($data));
    }
}

class XLSReport extends ExportReport
{
    public function save(array $data): void
    {
        // save to "report.xls"
    }
}

class App
{
    protected array $data;
    public function generateData(): void
    {
        // какая-то бизнес-логика
        $this->data = [1, 2, 3];
    }

    public function saveReport(Report $reportHandler): void
    {
        $reportHandler->save($this->data);
    }
}

// клиентский код
$app = new App();
$app->generateData();

// использование базового класса
$app->saveReport(new ExportReport);

// этот-же клиент вместо базового класса испозует его подтип
$app->saveReport(new XLSReport);