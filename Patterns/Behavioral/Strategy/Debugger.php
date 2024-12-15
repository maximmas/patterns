<?php

class Debugger
{
    public function __construct(private readonly LogState $logger)
    {
    }

    public function save(string $data): void
    {
        $this->logger->write($data);
    }
}