<?php


namespace App\Converter;


use App\Entity\Currency;

class Converter implements ConverterInterface
{
    protected float $rateValue;

    protected function setRateValue(float $amount, Currency $currencyFrom): void
    {
        $this->rateValue = $amount / $currencyFrom->getExchangeRate();
    }

    protected function getAmountConverted(Currency $currencyTo): float
    {
        $amountConverted = round($this->rateValue * $currencyTo->getExchangeRate(), 2);

        return $amountConverted;
    }

    public function convert(float $amount, Currency $currencyFrom, Currency $currencyTo): float
    {
        $this->setRateValue($amount, $currencyFrom);

        $amountConverted = $this->getAmountConverted($currencyTo);

        return $amountConverted;
    }
}