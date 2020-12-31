<?php

use Page\Acceptance\WishList;
use Step\Acceptance\Product\Product;

class WhistListCest
{
    private $cookie = null;

    public function _before(Product $I)
    {
        $I->amOnTestProductPage();
    }

    public function addToWishList(AcceptanceTester $I)
    {
        $I->click('Merken');
        $I->see('wurde 1-Mal auf den Merkzettel gelegt.');
        $this->cookie = $I->grabCookie('PHPSESSID');
    }

    public function checkProductOnWishListPage(AcceptanceTester $I, WishList $wishListPage, Product $product)
    {
        $I->setCookie('PHPSESSID', $this->cookie);
        $I->amOnPage($wishListPage::$URL);
        $I->see('Merkzettel');
        $I->see($product::NAME);
    }
    /**
     * @TODO: Entfernen Button so far not found as clickable
     */
//    public function removeProductFromWishList(AcceptanceTester $I, WishList $wishListPage, Product $product)
//    {
//        $I->setCookie('PHPSESSID', $this->cookie);
//        $I->amOnPage($wishListPage::$URL);
////        $I->click('Entfernen');
////        $I->click('Entfernen', '.btn btn-default');
////        $I->click('Entfernen', '.snippetTeaserStandardBase .snippetUserInputButtonAddToNoticeList a');
////        $I->click('/html/body/div[5]/div[2]/div[3]/div[1]/div/div/div[2]/div/div/div/div/div/div/div/div/div/div/div[2]/article/div/div[5]/span/a');
//    }

}
