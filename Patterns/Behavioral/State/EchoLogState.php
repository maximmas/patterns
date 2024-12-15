<?php

class EchoLogState implements LogState
{
    public function write(string $message): void
    {
        echo $message;
    }
}