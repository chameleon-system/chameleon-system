<?php namespace Account\StepB;


use AcceptanceTester;
use Step\Acceptance\Account\Account;

class NewsletterCest
{
    public function _before(Account $I)
    {
        $I->login();
    }

    // tests
    public function subscribeToNewsletter(AcceptanceTester $I)
    {
         $I->amOnPage('/Mein-Konto/Newsletter');
         $I->click('hier');
         $I->wait('1');
         $I->see('Sie haben den Newsletter abonniert');
    }

    public function unsubscribeToNewsletter(AcceptanceTester $I)
    {
        $I->amOnPage('/Mein-Konto/Newsletter');
        $I->click('hier');
        $I->wait('1');
        $I->see('Sie haben den Newsletter nicht abonniert');
    }
}
