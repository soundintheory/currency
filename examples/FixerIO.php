<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Currency\CurrencyConverter;
use Currency\Handler\FixerIO;

$currencyConverter = new CurrencyConverter(new FixerIO);
echo $currencyConverter
    ->convert(20)
    ->from('USD')
    ->to('EUR');
