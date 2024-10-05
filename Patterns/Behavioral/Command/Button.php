<?php

/**
 * Invoker - UI element
 */
class Button
{

    public function __construct(private Command $command){}

    public function submit(): void
    {
        $this->command->execute();
    }

}