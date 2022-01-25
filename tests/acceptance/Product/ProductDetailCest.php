<?php

use Step\Acceptance\Product\Product;

class ProductDetailCest
{

    public function _before(Product $I)
    {
        $I->amOnTestProductPage();
    }

    public function checkArticleDetails(AcceptanceTester $I)
    {
        $I->see(Product::NAME);
    }

    public function addToCart(AcceptanceTester $I)
    {
        $I->click('In den Warenkorb');
        $I->wait('4');
        $I->amOnPage('/Warenkorb');
        $I->see(Product::NAME);
    }
}
