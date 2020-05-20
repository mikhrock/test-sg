<?php


namespace App\Converter;

use App\Entity\Currency;


interface ConverterInterface
{
    public function convert(float $amount, Currency $currencyFrom, Currency $currencyTo): float;
}