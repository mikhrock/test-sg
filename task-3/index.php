<?php

require_once __DIR__ . '../vendor/autoload.php';

use App\Converter\Converter;
use App\Entity\Currency;

$usd = new Currency('USD');
$usd->setExchangeRate(1.0);

$eur = new Currency('EUR');
$eur->setExchangeRate(0.8);

$gbp = new Currency('GBP');
$gbp->setExchangeRate(0.7);

$converter = new Converter();

$gbpToUsd = $converter->convert(20, $gbp, $usd);

echo "20 GBP to USD: {$gbpToUsd}";