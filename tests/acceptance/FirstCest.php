<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function homepageTest(AcceptanceTester $I)
    {
        $I->see('Herzlich willkommen im Chameleon Demoshop!');
    }
}
