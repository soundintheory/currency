<?php


namespace Currency\Handler;


abstract class AbstractHandler implements CurrencyInterface
{
    protected $rates = [];

    public function execute($value, $from, $to)
    {
        return $this->getRate($from, $to) * $value;
    }

    abstract protected function getRate($from, $to);
}
