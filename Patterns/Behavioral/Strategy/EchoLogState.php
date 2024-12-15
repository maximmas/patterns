<?php

class EchoLogStrategy implements LogStrategy
{
    public function write(string $message): void
    {
        echo $message;
    }
}