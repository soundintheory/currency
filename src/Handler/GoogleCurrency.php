<?php

namespace Currency\Handler;

class GoogleCurrency extends AbstractHandler
{
    const URL = 'https://www.google.com/finance/converter?a=%d&from=%s&to=%s';

    protected function getRate($from, $to)
    {
        if (!isset($this->rates[$from])) {
            $this->rates[$from] = [];
            if (!isset($this->rates[$from][$to])) {
                $contents = file_get_contents($this->buildURL($from, $to));
                $firstChunk = explode('<span class=bld>', $contents);
                $secondChunk = explode('</span>', $firstChunk[1]);
                $rate = explode(' ', $secondChunk[0]);
                $this->rates[$from][$to] = (float)$rate[0];
            }
        }

        return $this->rates[$from][$to];
    }

    private function buildURL($from, $to)
    {
        return sprintf(self::URL, 1, $from, $to);
    }
}
