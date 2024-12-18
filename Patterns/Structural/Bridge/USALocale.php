<?php

namespace Bridge;

use Bridge\Locale;

class USALocale implements Locale
{

    public function getPrice()
    {
        return "Price: $1,000.00";
    }


    public function getText()
    {
        return 'Lorem ipsum dolor sit amet';
    }
}