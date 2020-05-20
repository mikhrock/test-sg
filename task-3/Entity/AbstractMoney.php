<?php


namespace App\Entity;


abstract class AbstractMoney
{
    protected string $name;

    protected float $exchangeRate;

    public abstract function getName(): string;

    public abstract function getExchangeRate(): float;

    public abstract function setExchangeRate(float $exchangeRate): void;
}