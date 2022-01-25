<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Module\Bootstrap;

class Acceptance extends \Codeception\Module
{

    public static function convertToPrice($price)
    {
        return number_format($price, 2, ',', '.');
    }
}
