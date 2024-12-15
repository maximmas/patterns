<?php

require_once __DIR__ . '/LogStrategy.php';
require_once __DIR__ . '/FileLogStrategy.php';
require_once __DIR__ . '/EchoLogStrategy.php';
require_once __DIR__ . '/Debugger.php';

$echoLogger = new EchoLogStrategy();
$fileLogger = new FileLogStrategy();

$data = "some data to save in log";

if(getenv('APP_ENV') === "development"){
    new Debugger($echoLogger)->save($data);
} else{
    new Debugger($fileLogger)->save($data);
}