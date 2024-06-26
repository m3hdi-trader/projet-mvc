<?php

namespace App\Utilities;

class Currency
{
    public static function formatPriceInHezarToman(int $amount): int
    {
        return $amount / 1000;
    }

    public static function formatPriceInMilonToman(int $amount): int
    {
        return $amount / 1000000;
    }

    public static function formatPriceToToman(int $amount): int
    {
        return  $amount;
    }

    public static function formatPriceInRial(int $amount): int
    {
        return $amount * 10;
    }
}
