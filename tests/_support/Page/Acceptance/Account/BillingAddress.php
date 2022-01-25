<?php
namespace Page\Acceptance\Account;

class BillingAddress
{
    // include url of current page
    public static $URL = '/Mein-Konto/Adressen/';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $salutationField = ['name' => 'aUserAddressBilling[data_extranet_salutation_id]'];
    public static $firstnameField = ['name' => 'aUserAddressBilling[firstname]'];
    public static $lastnameField = ['name' => 'aUserAddressBilling[lastname]'];
    public static $streetField = ['name' => 'aUserAddressBilling[street]'];
    public static $streetnrField = ['name' => 'aUserAddressBilling[streetnr]'];
    public static $postalcodeField = ['name' => 'aUserAddressBilling[postalcode]'];
    public static $cityField = ['name' => 'aUserAddressBilling[city]'];
    public static $countryField = ['name' => 'aUserAddressBilling[data_country_id]'];
    public static $formSubmitButton = 'Adresse ändern';
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
