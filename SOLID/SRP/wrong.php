<?php

class Request
{
    public function send(): ?string
    {
        $data = file_get_contents('https://example.com/data.txt');
        // проверка ...
        return $data;
    }

    public function validate(string $data): bool
    {
        // валидация ...
        return !empty($data);
    }

    public function save(string $data): void
    {
        file_put_contents('result.txt', $data);
    }
}

$request = new Request();
$data = $request->send();
if ($request->validate($data)) {
    $request->save($data);
}