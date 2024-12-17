<?php

require_once __DIR__ . '/ApplicationFormMemento.php';
require_once __DIR__ . '/ApplicationFormHandler.php';

$name = 'John Dow';
$email = 'john@dow.com';
$phone = '0123456789';

$handler = new ApplicationFormHandler();
$isValid = $handler->validate($name, $email, $phone);
$isValid ? print("Data valid\n") : print("Data not valid\n");
$savedData[] = $handler->save();

$name = 'Jane Dow';
$email = 'jane@dow.com';
$phone = '0987654321';

$isValid = $handler->validate($name, $email, $phone);
$isValid ? print("Data valid\n") : print("Data not valid\n");
$savedData[] = $handler->save();

$handler->restore($savedData[0]);
$handler->showApplicantData(); // John Dow