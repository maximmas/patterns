<?php

class ToyotaSparePartsKit extends SparePartsKit
{
    private string $model;

    public function __construct(string $model)
    {
        $this->model = $model;
    }

    public function getEngineParts(): array
    {
        return match ($this->model) {
            'Corolla' => ['generalToyotaEngineDetail1', 'specialCorollaEngineDetail1', 'specialCorollaEngineDetail2'],
            'Camry' => ['generalToyotaEngineDetail1', 'specialCamryEngineDetail1', 'specialCamryEngineDetail2'],
            default => ['generalToyotaEngineDetail1']
        };
    }

    public function getBodyParts(): array
    {
        return match ($this->model) {
            'Corolla' => ['generalToyotaBodyDetail1', 'specialCorollaBodyDetail1', 'specialCorollaBodyDetail2'],
            'Camry' => ['generalToyotaBodyDetail1', 'specialCamryBodyDetail1', 'specialCamryBodyDetail2'],
            default => ['generalToyotaBodyDetail1']
        };
    }
}