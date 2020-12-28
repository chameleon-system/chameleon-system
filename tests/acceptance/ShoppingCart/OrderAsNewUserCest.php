<?php

namespace Cart;

use AcceptanceTester;
use Helper\Acceptance;
use Step\Acceptance\Cart\Form;
use Step\Acceptance\Product\Product;
use Step\Acceptance\Shipping\Prepayment;

class OrderAsNewUserCest
{
    private $cookie = null;

    public function addProductToCart(Product $I)
    {
        $I->amOnTestProductPage();
        $I->click('In den Warenkorb');
        $I->wait(1);
        $I->see(Product::NAME);
        $this->cookie = $I->grabCookie('PHPSESSID');
    }

    public function stepCheckout(AcceptanceTester $I)
    {
        $I->setCookie('PHPSESSID', $this->cookie);
        $I->amOnPage('/');
        $I->wait(1);
        $I->amOnPage('/Warenkorb/');
        $I->see(Product::NAME);
        $I->submitForm('//form[@name="checkout"]', []);
        $this->cookie = $I->grabCookie('PHPSESSID');
    }


    public function stepUser(Form $I)
    {
        $I->setCookie('PHPSESSID', $this->cookie);
        $I->amOnPage('/Warenkorb/login');
        $I->click('Registrieren');
        $I->fillRegisterFormForNewUser();
        $I->submitForm('//form[@name="register"]', []);
        $this->cookie = $I->grabCookie('PHPSESSID');
    }

    public function stepPayment(Form $I)
    {
        $I->setCookie('PHPSESSID', $this->cookie);
        $I->amOnPage('/Warenkorb/Versand');
        $I->see('Ihre Versandart');
        $I->selectOption(['name' => 'aShipping[shop_payment_method_id]'], Prepayment::PAYMENT_ID);
        $I->click('Bestellung überprüfen');
        $this->cookie = $I->grabCookie('PHPSESSID');
    }


    public function stepConfirmOverview(AcceptanceTester $I)
    {
        $I->setCookie('PHPSESSID', $this->cookie);
        $I->see(Product::NAME);

        $I->see(Acceptance::convertToPrice(Product::PRICE_BRUTTO), 'tr.products-sum.is-total > td > span > span:nth-child(2)');
        $I->see(Acceptance::convertToPrice(Prepayment::PAYMENT_PRICE), 'tr.shippingcost > td > span > span:nth-child(2)');

        $totalSum = Product::PRICE_BRUTTO + Prepayment::PAYMENT_PRICE;
        $I->see(Acceptance::convertToPrice($totalSum), 'tr.grand-total.is-total > td > span > span:nth-child(2)');

        $vatPrice = $totalSum - ($totalSum / 1.19);
        $I->see(Acceptance::convertToPrice($vatPrice), 'tr.vat > td > span > span:nth-child(2)');
        $I->selectOption(['name' => 'aInput[agb]'], 'true');
        $I->click('Jetzt kaufen');
        $this->cookie = $I->grabCookie('PHPSESSID');
    }

    public function stepConfirmation(Form $I)
    {
        $I->setCookie('PHPSESSID', $this->cookie);
        $I->see('Bestätigung');
        $I->see(
            'Wir haben die Bestellbestätigung an folgende Email-Adresse geschickt:',
            'div.orderBlock > div.text > div > div:nth-child(2)'
        );
    }
}
