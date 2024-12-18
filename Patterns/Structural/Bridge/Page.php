<?php

namespace Bridge;

class Page
{

    public function __construct(protected Locale $locale)
    {
    }

    public function renderPage(): void
    {
        echo $this->locale->getPrice() . "\n";
        echo $this->locale->getText() . "\n";
    }

}