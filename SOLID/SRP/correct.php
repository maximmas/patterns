<?php

interface RequestInterface
{
    public function send(): string|array;
}

interface ValidatorInterface
{
    public function validate(mixed $data): bool;
}

interface SaverInterface
{
    public function save(mixed $data): bool;
}

class ExampleRequest implements RequestInterface
{
    public function send(): string|array
    {
        $data = file_get_contents('https://example.com/data.txt');
        // проверка ...
        return $data;
    }
}

class Validator implements ValidatorInterface
{
    public function validate(mixed $data): bool
    {
        // валидация ...
        return !empty($data);
    }
}

class FileSaver implements SaverInterface
{
    function save(mixed $data): bool
    {
        if (!is_string($data)) {
            $data = json_encode($data);
        }
        file_put_contents('result.txt', $data);
        return true;
    }
}

$request = new ExampleRequest();
$validator = new Validator();
$saver = new FileSaver();

$data = $request->send();
if ($validator->validate($data)) {
    $saver->save($data);
}