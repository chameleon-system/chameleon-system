<?php

namespace Step\Acceptance\Cart;


use AcceptanceTester;
use Page\Acceptance\Account\ShippingAddress;
use Page\Acceptance\Register;
use Step\Acceptance\Account\Account;

class Form extends AcceptanceTester
{

    public function fillShippingFormForGuest()
    {
        $I = $this;
        $I->selectOption(ShippingAddress::$salutationField, '1');
        $I->fillField(ShippingAddress::$firstnameField, Account::TEST_GUEST_USER_NAME);
        $I->fillField(ShippingAddress::$lastnameField, 'Mustermann');
        $I->fillField(ShippingAddress::$streetField, 'Musterstraße');
        $I->fillField(ShippingAddress::$streetnrField, '3');
        $I->fillField(ShippingAddress::$postalcodeField, '87655');
        $I->fillField(ShippingAddress::$cityField, 'Steinen');
        $I->selectOption(ShippingAddress::$countryField, '1');

        $I->fillField(Register::$emailField, Account::TEST_GUEST_USER_EMAIL);

    }

    public function fillRegisterFormForNewUser()
    {
        $I = $this;
        $I->selectOption(Register::$salutationField, '1');
        $I->fillField(Register::$firstnameField, Account::TEST_CHECKOUT_NEW_USER_NAME);
        $I->fillField(Register::$lastnameField, 'Mustermann');
        $I->fillField(Register::$streetField, 'Musterstraße');
        $I->fillField(Register::$streetnrField, '3');
        $I->fillField(Register::$postalcodeField, '79539');
        $I->fillField(Register::$cityField, 'Lörrach');
        $I->selectOption(Register::$countryField, '1');

        $I->fillField(Register::$emailField, Account::TEST_CHECKOUT_NEW_USER_MAIL);
        $I->fillField(Register::$passwordField, Account::TEST_CHECKOUT_NEW_USER_PASSWORD);
        $I->fillField(Register::$passwordAgainField, Account::TEST_CHECKOUT_NEW_USER_PASSWORD);
        $I->fillField(Register::$birthdateField, '01.01.1950');
    }

}
