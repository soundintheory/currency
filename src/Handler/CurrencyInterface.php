<?php

namespace Currency\Handler;

interface CurrencyInterface
{
    public function execute($value, $from, $to);
}
