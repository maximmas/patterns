<?php

interface PropertyContainerInterface
{
    public function setProperty(string $name, mixed $value): void;
    public function getProperty(string $name): mixed;
    public function deleteProperty(string $name): void;
    public function updateProperty(string $name, mixed $value): void;
}