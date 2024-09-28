<?php

abstract class SparePartsKit
{
    abstract public function getEngineParts(): array;
    abstract public function getBodyParts(): array;
}