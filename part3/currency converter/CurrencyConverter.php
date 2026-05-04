<?php

class CurrencyConverter
{
    private function __construct(){

    }
    public static function euroToDollar(float $amount):float{
        return $amount/1.08;
    }
    public static function dollarToEuro(float $amount):float{
        return $amount*1.08;
    }
    public static function euroToDirham(float $amount):float{
        return $amount*10.80;
    }
    public static function dirhamToEuro(float $amount):float{
        return $amount/10.80;
    }


}