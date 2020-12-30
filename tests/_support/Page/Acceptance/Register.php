<?php
namespace Page\Acceptance;

class Register
{
    // include url of current page
    public static $URL = '/Registrieren';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $salutationField = ['name' => 'aUser[data_extranet_salutation_id]'];
    public static $firstnameField = ['name' => 'aUser[firstname]'];
    public static $lastnameField = ['name' => 'aUser[lastname]'];
    public static $streetField = ['name' => 'aUser[street]'];
    public static $streetnrField = ['name' => 'aUser[streetnr]'];
    public static $postalcodeField = ['name' => 'aUser[postalcode]'];
    public static $cityField = ['name' => 'aUser[city]'];
    public static $countryField = ['name' => 'aUser[data_country_id]'];
    public static $emailField = ['name' => 'aUser[name]'];
    public static $passwordField = ['name' => 'aUser[password]'];
    public static $passwordAgainField = ['name' => 'aUser[password2]'];
    public static $birthdateField = ['name' => 'aUser[birthdate]'];
    public static $formSubmitButton = '//form[@name="register"]';

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
