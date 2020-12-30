<?php namespace Account\StepB;


use AcceptanceTester;
use Page\Acceptance\Account\BillingAddress;
use Step\Acceptance\Account\Account;

class AddresseCest
{
    /**
     * @TODO:
     *  1. We need ID for Shipping Form Buttons "Adresse ändern" and "Adresse anlegen"
     *  2. We need NAME or ID for Forms
     */

    public function _before(Account $I)
    {
        $I->login();
    }

    // tests
    public function changeInvoiceAddress(AcceptanceTester $I)
    {
        $newFirstname = 'New Test Name';
        $I->amOnPage(BillingAddress::$URL);
        $I->selectOption(BillingAddress::$salutationField, '2');
        $I->fillField(BillingAddress::$firstnameField, $newFirstname);
        $I->fillField(BillingAddress::$lastnameField, 'Mustermann');
        $I->fillField(BillingAddress::$streetField, 'Musterstraße');
        $I->fillField(BillingAddress::$streetnrField, '9');
        $I->fillField(BillingAddress::$postalcodeField, '79539');
        $I->fillField(BillingAddress::$cityField, 'Lörrach');
        $I->selectOption(BillingAddress::$countryField, '26');
        $I->click('Adresse ändern');
        $I->wait(2);
        $I->seeInField(BillingAddress::$firstnameField, $newFirstname);

    }
    public function rollbackInvoiceAddressWithDefault(AcceptanceTester $I)
    {
        $I->amOnPage(BillingAddress::$URL);
        $I->fillField(BillingAddress::$firstnameField, Account::TEST_USER_NAME);
        $I->selectOption(BillingAddress::$salutationField, '1');
        $I->selectOption(BillingAddress::$countryField, '1');
        $I->click('Adresse ändern');
        $I->wait(2);
    }

//    public function changeDeliveryAddress(AcceptanceTester $I)
//    {
//        $newFirstname = 'Update Delivery Firstname';
//        $firstnameFieldName = 'aUserAddressShipping[firstname]';
//        $I->amOnPage('/Mein-Konto/Adressen/');
//        $I->selectOption(['name' => 'aUserAddressShipping[data_extranet_salutation_id]'], '1');
//        $I->fillField(['name' => $firstnameFieldName], $newFirstname);
//        $I->fillField(['name' => 'aUserAddressShipping[lastname]'], 'Mustermann');
//        $I->fillField(['name' => 'aUserAddressShipping[street]'], 'Musterstraße');
//        $I->fillField(['name' => 'aUserAddressShipping[streetnr]'], '9');
//        $I->fillField(['name' => 'aUserAddressShipping[postalcode]'], '79539');
//        $I->fillField(['name' => 'aUserAddressShipping[city]'], 'Lörrach');
//        $I->selectOption(['name' => 'aUserAddressShipping[data_country_id]'], '26');
//        $I->click('div.snippetFormUserAddressWizardStep > div.form > form > div.form-group > div > div > input');
//        $I->wait(2);
//        $I->seeInField(['name' => $firstnameFieldName], $newFirstname);
//
//        // Rollback
//        $I->fillField(['name' => $firstnameFieldName], Account::TEST_USER_NAME);
//        $I->selectOption(['name' => 'aUserAddressBilling[data_extranet_salutation_id]'], '1');
//        $I->click('div.snippetFormUserAddressWizardStep > div.form > form > div.form-group > div > div > input');
//        $I->wait(1);
//    }

//    public function addNewDeliveryAddress(AcceptanceTester $I)
//    {
//        $newFirstname = 'New Test Name';
//        $firstnameFieldName = 'aUserAddressShipping[firstname]';
//        $I->amOnPage('/Mein-Konto/Adressen/');
//        $I->selectOption(['name' => 'aUserAddressShipping[data_extranet_salutation_id]'], '1');
//        $I->fillField(['name' => $firstnameFieldName], $newFirstname);
//        $I->fillField(['name' => 'aUserAddressShipping[lastname]'], 'Mustermann');
//        $I->fillField(['name' => 'aUserAddressShipping[street]'], 'Musterstraße');
//        $I->fillField(['name' => 'aUserAddressShipping[streetnr]'], '9');
//        $I->fillField(['name' => 'aUserAddressShipping[postalcode]'], '79539');
//        $I->fillField(['name' => 'aUserAddressShipping[city]'], 'Lörrach');
//        $I->selectOption(['name' => 'aUserAddressShipping[data_country_id]'], '26');
//        $I->submitForm('div.snippetFormUserAddressWizardStep > div.form > form', []);
//        $I->wait(2);
//        $newAddressHeadline = sprintf('Herr %s %s', $newFirstname, 'Mustermann');
//        $I->see($newAddressHeadline, '.snippetPkgExtranetAddress .name');
//
//        // Rollback
//        $I->fillField(['name' => $firstnameFieldName], Account::TEST_USER_NAME);
//        $I->submitForm('div.snippetFormUserAddressWizardStep > div.form > form', []);
//        $I->wait(1);
//    }
}
