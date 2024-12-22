<?php

class Notification implements Messenger
{
    public function send($message): void
    {
        (new EmailNotification)->send($message);
        (new SlackNotification)->send($message);
    }
}