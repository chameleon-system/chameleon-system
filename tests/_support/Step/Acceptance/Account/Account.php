<?php
namespace Step\Acceptance\Account;


use Page\Acceptance\Login;
use Page\Acceptance\Register;

class Account extends \AcceptanceTester
{
    public const TEST_USER_NAME = 'Acception Tester';
    public const TEST_USER_EMAIL = 'acception-test@esono.de';
    public const TEST_USER_PASSWORD = '55a.Pa6XyG';
    public const TEST_USER_EMAIL_FOR_CHANGE = 'acception-test-updated@esono.de';
    public const TEST_USER_PASSWORD_FOR_CHANGE = '12345671';
    public const TEST_USER_BIRTHDAY_FOR_CHANGE = '01.01.1989';

    public const TEST_GUEST_USER_NAME = 'Guest Acception Tester';
    public const TEST_GUEST_USER_EMAIL = 'guest-acception-test@esono.de';

    public const TEST_CHECKOUT_NEW_USER_NAME = 'New Checkout User Tester';
    public const TEST_CHECKOUT_NEW_USER_MAIL = 'newuser-acception-test@esono.de';
    public const TEST_CHECKOUT_NEW_USER_PASSWORD = '55a.Pa6XyG';


    public function register()
    {
        $I = $this;
        $I->amOnPage(Register::$URL);
        $I->fillRegisterForm(self::TEST_USER_NAME, self::TEST_USER_EMAIL, self::TEST_USER_PASSWORD);
        $I->submitForm(Register::$formSubmitButton, []);
        $I->wait(1);
    }

    public function login()
    {
        $I = $this;
        $I->amOnPage(Login::$URL);
        $I->fillField(Login::$emailField, self::TEST_USER_EMAIL);
        $I->fillField(Login::$passwordField, self::TEST_USER_PASSWORD);
        $I->click(Login::$formSubmitButton);
        $I->wait(1);
    }


    public function fillRegisterForm(string $name, string $email, string $password)
    {
        $I = $this;
        $I->selectOption(Register::$salutationField, '1');
        $I->fillField(Register::$firstnameField, $name);
        $I->fillField(Register::$lastnameField, 'Mustermann');
        $I->fillField(Register::$streetField, 'Musterstraße');
        $I->fillField(Register::$streetnrField, '3');
        $I->fillField(Register::$postalcodeField, '79539');
        $I->fillField(Register::$cityField, 'Lörrach');
        $I->selectOption(Register::$countryField, '1');
        $I->fillField(Register::$emailField, $email);
        $I->fillField(Register::$passwordField, $password);
        $I->fillField(Register::$passwordAgainField, $password);
        $I->fillField(Register::$birthdateField, '01.01.1950');
    }

}
