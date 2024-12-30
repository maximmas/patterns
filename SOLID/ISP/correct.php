<?php

interface Informer
{
    public function sendEmail(): void;
    public function sendSMS(): void;
    public function sendSlack(): void;
}

interface PWAInformer
{
    public function sendPush(): void;
}


class WebNotification implements Informer
{
    public function sendEmail(): void
    {
        // отправлем письмо через PHPMailer
    }

    public function sendSMS(): void
    {
        // отправляем СМС через Twilio
    }

    public function sendSlack(): void
    {
        // отправляем сообщение через вебхук Слэка
    }
}

class PWANotification implements PWAInformer
{
    public function sendPush(): void
    {
        // отправляем пущ из PWA
    }
}