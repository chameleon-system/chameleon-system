<?php
namespace Page\Acceptance\Account;

class ShippingAddress
{
    // include url of current page
    public static $URL = '/Mein-Konto/Adressen/';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $salutationField = ['name' => 'aUserAddressShipping[data_extranet_salutation_id]'];
    public static $firstnameField = ['name' => 'aUserAddressShipping[firstname]'];
    public static $lastnameField = ['name' => 'aUserAddressShipping[lastname]'];
    public static $streetField = ['name' => 'aUserAddressShipping[street]'];
    public static $streetnrField = ['name' => 'aUserAddressShipping[streetnr]'];
    public static $postalcodeField = ['name' => 'aUserAddressShipping[postalcode]'];
    public static $cityField = ['name' => 'aUserAddressShipping[city]'];
    public static $countryField = ['name' => 'aUserAddressShipping[data_country_id]'];
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
