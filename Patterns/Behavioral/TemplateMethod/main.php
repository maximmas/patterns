<?php

require_once __DIR__ . '/NotificationSender.php';
require_once __DIR__ . '/EmailSender.php';
require_once __DIR__ . '/SlackSender.php';

$message = "Hello World!";
new EmailSender()->send($message);
new SlackSender()->send($message);