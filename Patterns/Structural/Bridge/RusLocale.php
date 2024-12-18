<?php

namespace Bridge;

use Bridge\Locale;

class RusLocale implements Locale
{

    public function getPrice()
    {
        return "Цена: 100'000.00 руб.";
    }


    public function getText()
    {
        return 'Текст с описанием товара';
    }
}