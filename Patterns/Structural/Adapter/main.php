<?php

$handler = new DataHandler;

$formData = $handler->handle(new FormData());

$adapter = new AppDataAdapter(new AppData);
$appData = $handler->handle($adapter);