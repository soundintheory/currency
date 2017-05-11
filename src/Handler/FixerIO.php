<?php

namespace Currency\Handler;

class FixerIO extends AbstractHandler
{
    const URL = 'http://api.fixer.io/latest?base=%s';

    protected function getRate($from, $to)
    {
        if (empty($this->rates)) {
            list($base, $date, $rates) = array_values(json_decode(file_get_contents($this->buildURL($from)), true));
            $this->rates = $rates;
        }

        $to = strtoupper($to);

        if (!array_key_exists($to, $this->rates)) {
            throw new \DomainException("$to is not a supported currency format");
        }

        return $this->rates[$to];
    }

    private function buildURL($from)
    {
        return sprintf(self::URL, $from);
    }
}
