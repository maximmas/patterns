<?php

class ApplicationFormMemento
{
    protected string $storage;

    public function __construct(string $data)
    {
        $this->storage = $data;
    }

    public function getStorage(): string
    {
        return $this->storage;
    }
}