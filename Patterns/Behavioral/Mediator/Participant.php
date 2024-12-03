<?php

class Participant
{
    protected int $id;
    protected Host $host;

    public function __construct(int $id, Host $host)
    {
        $this->id = $id;
        $this->host = $host;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function placeBet(float $price): void
    {
        $this->host->publishPrice($this, $price);
    }
}