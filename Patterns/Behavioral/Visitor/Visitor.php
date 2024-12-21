<?php

interface Visitor
{
    public function export(Entity $entity);
}