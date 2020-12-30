<?php
namespace Account\StepA;


use \Step\Acceptance\Account\Account;

class RegisterCest
{
    public function checkLogin(Account $I)
    {
        $I->register();
        $I->amOnPage('/Login');
        $I->see(Account::TEST_USER_EMAIL);
    }
}
