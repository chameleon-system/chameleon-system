<?php

if (!defined('_CONFIG_LOADED')) {
    define('_CONFIG_LOADED', true); // we do this so that this config is only called once...

    $devMode = false;
    $symfonyEnvironment = getenv('APP_ENV') ?: getenv('SYMFONY_ENV') ?: false;
    if ('console' === REQUEST_PROTOCOL) {
        $input = new \Symfony\Component\Console\Input\ArgvInput();
        $env = $input->getParameterOption(array('--env', '-e'), $symfonyEnvironment ?: 'dev');
        $devMode = 'prod' !== $env;
    } else if (false !== $symfonyEnvironment) {
        $devMode = 'prod' !== $symfonyEnvironment;
    }
    define('_DEVELOPMENT_MODE', $devMode);

    /**
     * used to encode data. MAKE SURE TO SET A CUSTOM KEY FOR EVERY PROJECT!
     */
    define('CMSFIELD_DATA_ENCODING_KEY', ')"y#;ybk98Q.v\:c+Nnid ^SRYL,cfy3B\'n>3*nN');

    define('CMS_PKG_VIEW_RENDERER_ENABLE_LESS_COMPILER', true);

    define('RENDER_DIV_WITH_MODULE_AND_VIEW_NAME_ON_MODULE_LOAD', false);
    /**
     * set to true if you have a multi language webpage.
     */
    define('ACTIVE_TRANSLATION', true);
    /**
     * activates multilanguage support in the CMS backend.
     */
    define('ACTIVE_BACKEND_TRANSLATION', true);

    if (!defined('CHAMELEON_ENABLE_FLUSHING')) {
        define('CHAMELEON_ENABLE_FLUSHING', true);
    }

    define('PKG_EXTRANET_USE_CASE_INSENSITIVE_LOGIN_NAMES', true);
}
