<?php

class Client implements Entity
{
    protected string $name;
    protected string $email;

    public function accept(Visitor $visitor): void
    {
        $visitor->export($this);
    }
}