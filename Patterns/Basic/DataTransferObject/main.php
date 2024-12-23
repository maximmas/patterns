<?php

$firstName = $_POST['firstName'] ?? 'no value';
$lastName = $_POST['lastName'] ?? 'no value';
$email = $_POST['email'] ?? 'email';

$dto = new ApplicantDTO((string)$firstName, (string)$lastName, (string)$email);

// sendToAPI($dto);
// отправляем DTO в обработчик