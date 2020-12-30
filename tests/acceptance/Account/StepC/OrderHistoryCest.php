<?php namespace Account\StepB;


use AcceptanceTester;
use Step\Acceptance\Account\Account;

class OrderHistoryCest
{
    /**
     * @TODO
     *  1. Create Order Check, if Order Exists (maybe creating Fake Order for this Test)
     */
    public function _before(Account $I)
    {
        $I->login();
    }

    // tests
    public function overview(AcceptanceTester $I)
    {
        $I->amOnPage('/Mein-Konto/Bestellhistorie');
        $I->see('Sie haben noch keine Bestellungen getätigt.');
    }
}
