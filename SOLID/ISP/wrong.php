<?php

interface Informer
{
    public function sendEmail(): void;
    public function sendSMS(): void;
    public function sendSlack(): void;
    public function sendPush(): void;
}

class Notification implements Informer
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

    public function sendPush(): void
    {
        // мы не используем пуши, этот метод просто заглушка
    }
}
