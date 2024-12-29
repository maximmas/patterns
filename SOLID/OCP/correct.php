<?php

abstract class Report
{
    abstract public function getReport(): void;
}

class WebReport extends Report
{
    public function getReport(string $type): void
    {
        // вывод на экран
    }
}

class PDFReport extends Report
{
    public function getReport(string $type): void
    {
        // экспорт в PDF
    }
}

class CSVReport extends Report
{
    public function getReport(string $type): void
    {
        // экспорт в CSV
    }
}