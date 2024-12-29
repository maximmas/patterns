<?php

class Report
{
    public function getReport(string $type): void
    {
        if ($type === 'web') {
            // вывод на экран
        } elseif ($type === 'pdf') {
            // экспорт в PDF
        } else {
            // экспорт в CSV
        }
    }
}