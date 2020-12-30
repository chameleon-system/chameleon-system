<?php
namespace Step\Acceptance\Product;

class Product extends \AcceptanceTester
{
    /**
     * Please, use only English letters [a-z,A-Z], numbers[0-9]
     * @var string
     */
    public const NAME = 'DummyProduct';
    public const ARTICLE_NUMBER = 'test-123';
    public const PRICE_BRUTTO = 33.00;
    public const STOCK_COUNT = 3;
    public const URL_TEMPLATE = '/-/-/%s_pid_0_%s.html';
    private static int $cmsident;
    private static int $stockCmsident;



    public function amOnTestProductPage()
    {
        $I = $this;
        $seoURL = sprintf(self::URL_TEMPLATE, strtolower(self::NAME), self::getCmsident());
        $I->amOnPage($seoURL);
    }

    public static function setCMSident(string $lastInsertId): void
    {
        self::$cmsident = $lastInsertId;
    }

    public static function getCmsident(): int
    {
        return self::$cmsident;
    }

    public static function getStockCmsident(): int
    {
        return self::$stockCmsident;
    }

    public static function setStockCmsident(int $stockCmsident): void
    {
        self::$stockCmsident = $stockCmsident;
    }


}
