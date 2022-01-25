<?php

namespace Account\StepB;


use Step\Acceptance\Account\Account;

class LostPasswortCest
{

    public function _before(Account $I)
    {
        $I->login();
    }

    public function checkLostPasswordForm(Account $I)
    {
        $I->amOnPage('/Passwort-vergessen');
        $I->fillField(['name' => 'name'], Account::TEST_USER_EMAIL);
        $I->click('E-Mail versenden');
        $I->wait(1);
        $I->see('Ihr Passwort wurde an die angegebene Emailadresse versendet.');
    }

}
