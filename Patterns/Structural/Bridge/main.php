<?php

namespace Bridge;

$euLocale = new EuropeLocale();
$usaLocale = new USALocale();
$ruLocale = new EuropeLocale();

$locale = match (getUserLocationFromGeoIP()) {
    'RU' => $ruLocale,
    'US' => $usaLocale,
    default => $euLocale
};

new Page($locale)->renderPage();

function getUserLocationFromGeoIP(): string
{
    // get country code from GeoIP
    return '';
}