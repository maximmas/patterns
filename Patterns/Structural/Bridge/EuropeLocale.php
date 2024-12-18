<?php

namespace Bridge;

class EuropeLocale implements Locale
{

    public function getPrice()
    {
        return 'Price: 1000.00 EUR';
    }

    public function getText()
    {
        return 'Lorem ipsum dolor sit amet';
    }
}