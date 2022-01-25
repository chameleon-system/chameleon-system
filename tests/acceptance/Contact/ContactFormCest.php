<?php

use Page\Acceptance\Contact;

class ContactFormCest
{
    public function sendContactForm(AcceptanceTester $I, Contact $contactPage)
    {
        $I->amOnPage($contactPage::$URL);
        $I->fillField('firstname', 'Max');
        $I->fillField(['id' => 'contactLastName'], 'Musterman');
        $I->fillField('address_additional_info', 'Musterman GmbH');
        $I->fillField('street', 'Musterstraße, 3');
        $I->fillField('postalcode', '79539');
        $I->fillField('city', 'Lörrach');
        $I->selectOption('data_country_id', '1');
        $I->fillField('email', 'max@mustermann.xyz');
        $I->fillField('tel', '+123456789');
        $I->fillField('subject', 'Kontakformular Test');
        $I->fillField('body', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.');
        $I->click('Absenden');
        $I->see('Vielen Dank für Ihre Nachricht.');
    }

}
