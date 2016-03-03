<?php

namespace Currency;

use Currency\Handler\CurrencyInterface;

class CurrencyBuilder
{
    private $from;
    private $currency;
    private $value;

    public function __construct(CurrencyInterface $currency, $value)
    {
        $this->currency = $currency;
        $this->value = $value;
    }

    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    public function to($to)
    {
        return $this->currency->execute($this->value, $this->from, $to);
    }
}
