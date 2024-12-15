<?php

require_once __DIR__ . '/LogState.php';
require_once __DIR__ . '/FileLogState.php';
require_once __DIR__ . '/EchoLogState.php';
require_once __DIR__ . '/Debugger.php';

$echoLogger = new EchoLogState();
$defaultLogger = new FileLogState();
$debugger = new Debugger($defaultLogger);

$counter = 0;
while($counter < 10) {
    // do something
    if($counter > 5){
        $debugger->setState($echoLogger);
    }
    $debugger->save("counter value is {$counter}\n");
    $counter++;
}