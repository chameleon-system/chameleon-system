<?php namespace Account;


use Step\Acceptance\Account\Account;

class ProfilCest
{
    public function _before(Account $I)
    {
        $I->login();
    }

    // tests
    public function birthdayChange(Account $I)
    {
        $I->amOnPage('/Mein-Konto/Profil/');
        $I->see('Profildaten ändern');
        $I->fillField(['name' => 'aUserInput[birthdate]'], Account::TEST_USER_BIRTHDAY_FOR_CHANGE);
        $I->click('Absenden');
        $I->wait(1);
        $I->see('Ihre Profildaten wurden aktualisiert.');
    }

    /**
     * @Info: For $rollback param:
     *                      Method will be 2 times called,
     *                      1. Change Default Password with New Password,
     *                      2. Change New Password with Default Password.
     * @param Account $I
     * @param bool $rollback
     */
    public function passwordChange(Account $I, bool $rollback = false)
    {

        $password = Account::TEST_USER_PASSWORD;
        $newPassword = Account::TEST_USER_PASSWORD_FOR_CHANGE;
        if (true === $rollback) {
            $password = Account::TEST_USER_PASSWORD_FOR_CHANGE;
            $newPassword = Account::TEST_USER_PASSWORD;
        }
        $I->amOnPage('/Mein-Konto/Profil/');
        $I->see('Passwort');
        $I->fillField(['id' => 'profilePasswordOPassword'], $password);
        $I->fillField(['id' => 'profilePasswordNPassword'], $newPassword);
        $I->fillField(['id' => 'profilePasswordCheck'], $newPassword);

        $I->click('div.snippetFormUserProfilePassword > div.form > form > div.form-group > div > input');
        $I->wait(1);
        $I->see('Das Passwort wurde erfolgreich geändert.');

        if (false === $rollback) {
            $this->passwordChange($I, true);
        }
    }

    /**
     * @Info: For $rollback param:
     *                      Method will be 2 times called,
     *                      1. Change Default Email with New Email,
     *                      2. Change New Email with Default Email.
     * @param Account $I
     * @param bool $rollback
     */
    public function emailChange(Account $I, bool $rollback = false)
    {
        $email = Account::TEST_USER_EMAIL_FOR_CHANGE;
        if (true === $rollback) {
            $email = Account::TEST_USER_EMAIL;
        }

        $I->amOnPage('/Mein-Konto/Profil/');
        $I->see('Ihre E-Mail-Adresse');
        $I->fillField(['id' => 'profileEmailEMail'], $email);
        $I->fillField(['id' => 'profileEmailPassword'], Account::TEST_USER_PASSWORD);
        $I->click('div.snippetFormUserProfileEmail > div.form > form > div.form-group > div > input');
        $I->wait(1);
        $I->see('Das Login wurde erfolgreich geändert.');

        if (false === $rollback) {
            $this->emailChange($I, true);
        }
    }


}
