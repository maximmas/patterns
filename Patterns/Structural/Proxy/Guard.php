<?php

class Guard implements AppInterface
{

    private $app;

    public function __construct(AppInterface $app)
    {
        $this->app = $app;
    }

    public function run(): void
    {
        $userLocationCode = 'ABCD'; // получаем код страны пользователя
        if ($userLocationCode !== 'QWERTY') {
            $this->app->run();
        }
    }
}