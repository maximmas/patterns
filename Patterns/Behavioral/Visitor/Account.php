<?php

class Account implements Entity
{

    protected int $id;
    protected float $amount;

    public function accept(Visitor $visitor): void
    {
        $visitor->export($this);
    }
}