<?php

interface LogStrategy
{
    public function write(string $message);
}