<?php

class AppDataAdapter implements Data
{
    private AppData $data;
    public function __construct(AppData $data)
    {
        $this->data = $data;
    }
    public function getData(): array
    {
        return json_decode($this->data->getData());
    }
}