<?php

class Debugger
{
    public function __construct(private LogState $logger)
    {
    }

    public function setState(LogState $logger): void
    {
        $this->logger = $logger;
    }

    public function save(string $data): void
    {
        $this->logger->write($data);
    }
}