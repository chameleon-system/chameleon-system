<?php

if (!defined('_FRAMEWORK_CONFIG_LOADED')) {
    define('_FRAMEWORK_CONFIG_LOADED', true); // we do this so that this config only every is called once...

    /**
     * points to the base path of the user framework (holding modules, layouts, pagedefs, but not the core).
     */
    define('_CMS_USER_CORE', PATH_CUSTOMER_FRAMEWORK);

    // don`t touch this, if you don`t know what you are doing!
    /**
     * points to the base of the framework layout templates.
     */
    define('PATH_LAYOUTTEMPLATES', PATH_CUSTOMER_PAGELAYOUTS);
    /**
     * points to the base of the custom  framework layout templates.
     */
    define('PATH_LAYOUTTEMPLATES_CUSTOM', PATH_LAYOUTTEMPLATES);
    /**
     * points to the base of the customer framework layout templates.
     */
    define('PATH_LAYOUTTEMPLATES_CUSTOMER', PATH_CUSTOMER_PAGELAYOUTS);
    /**
     * Points to the framework pagedefinition files.
     */
    define('PATH_PAGE_DEFINITIONS', PATH_CUSTOMER_PAGEDEFINITIONS);
    /**
     * Points to the framework pagedefinition files.
     */
    define('PATH_PAGE_DEFINITIONS_CUSTOM', PATH_PAGE_DEFINITIONS);
    /**
     * Points to the framework pagedefinition files.
     */
    define('PATH_PAGE_DEFINITIONS_CUSTOMER', PATH_PAGE_DEFINITIONS);

    /**
     * Points to the base of the framework Modules.
     */
    define('PATH_MODULES', _CMS_USER_CORE.'/modules/');
    /**
     * Points to the base of the custom framework Modules.
     */
    define('PATH_MODULES_CUSTOM', _CMS_CUSTOM_CORE.'/modules/');

    /**
     * Points to the base of the customer cms extensions.
     */
    define('PATH_MODULES_CUSTOMER', _CMS_CUSTOMER_CORE.'/modules/');

    /**
     * Points to the base of the customer framework Modules.
     */
    define('PATH_CUSTOMER_FRAMEWORK_MODULES', PATH_CUSTOMER_FRAMEWORK.'/modules/');

    /**
     * Points to the module path in the CMS core.
     */
    define('PATH_CORE_MODULES', _CMS_CORE.'/modules/');

    /**
     * Points to the core of the framework.
     */
    define('PATH_CORE', _CMS_CORE.'/core/');

    /**
     * Points to the core of the framework.
     */
    define('PATH_CORE_CUSTOM', _CMS_CUSTOM_CORE.'/core/');

    /**
     * Points to the core of the framework.
     */
    define('PATH_CORE_CUSTOMER', _CMS_CUSTOMER_CORE.'/core/');

    /**
     * points to the root of the framework.
     */
    define('PATH_ROOT', _CMS_CORE);
    /**
     * Points to the library base. Below this path are usually things like ./classes and ./functions.
     */
    define('PATH_LIBRARY', _CMS_CORE.'/library/');

    /**
     * holds the central custom extensions for classes and functions.
     */
    define('PATH_LIBRARY_CUSTOM', _CMS_CUSTOM_CORE.'/library/');

    /**
     * holds the customer extensions for classes and functions for a specific domain.
     */
    define('PATH_LIBRARY_CUSTOMER', _CMS_CUSTOMER_CORE.'/library/');
}
