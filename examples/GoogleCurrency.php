<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Currency\CurrencyConverter;
use Currency\Handler\GoogleCurrency;

$currencyConverter = new CurrencyConverter(new GoogleCurrency);
echo $currencyConverter
    ->convert(20)
    ->from('USD')
    ->to('EUR');
