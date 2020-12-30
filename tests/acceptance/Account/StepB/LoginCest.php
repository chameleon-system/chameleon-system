<?php

namespace Account\StepB;

use Step\Acceptance\Account\Account;

class LoginCest
{

    public function checkLogin(Account $I)
    {
        $I->login();
        $I->see('Mein Konto');
    }

}
