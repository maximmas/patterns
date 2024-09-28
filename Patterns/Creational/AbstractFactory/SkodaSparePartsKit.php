<?php

class SkodaSparePartsKit extends SparePartsKit
{
    private string $model;

    public function __construct(string $model)
    {
        $this->model = $model;
    }

    public function getEngineParts(): array
    {
        return match ($this->model) {
            'Octavia' => ['generalSkodaEngineDetail1', 'specialOctaviaEngineDetail1', 'specialOctaviaEngineDetail2'],
            'Kodiaq' => ['generalSkodaEngineDetail1', 'specialKodiaqEngineDetail1', 'specialKodiaqEngineDetail2'],
            default => ['generalSkodaEngineDetail1']
        };
    }

    public function getBodyParts(): array
    {
        return match ($this->model) {
            'Octavia' => ['generalSkodaBodyDetail1', 'specialOctaviaBodyDetail1', 'specialOctaviaBodyDetail2'],
            'Kodiaq' => ['generalSkodaBodyDetail1', 'specialKodiaqBodyDetail1', 'specialKodiaqBodyDetail2'],
            default => ['generalSkodaBodyDetail1']
        };
    }
}