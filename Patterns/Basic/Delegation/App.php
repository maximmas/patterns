<?php

class App
{
    protected Notification $notification;

    public function __construct(){
        $this->notification = new Notification();
    }

    public function run():void
    {
        // do smth

        $this->notification->send("Text message");
    }
}