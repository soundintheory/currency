<?php

namespace Currency;

use Currency\Handler\CurrencyInterface;

class CurrencyConverter
{
    protected $currencyService;

    function __construct(CurrencyInterface $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public function convert($value)
    {
        return new CurrencyBuilder($this->currencyService, $value);
    }
}
