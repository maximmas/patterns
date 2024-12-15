<?php

abstract class NotificationSender
{
    final public function send(string $data): void
    {
        $this->addReceiver();
        $this->addSubject();
        $this->addMessage();
        $this->request();
    }

    abstract public function addReceiver(): void;
    abstract public function addSubject(): void;
    abstract public function addMessage(): void;
    abstract public function request(): void;
}