<?php

if (!defined('_CONFIG_LOADED')) {
    define('_CONFIG_LOADED', true); // we do this so that this config is only called once...

    /**
     * used to encode data. MAKE SURE TO SET A CUSTOM KEY FOR EVERY PROJECT!
     */
    define('CMSFIELD_DATA_ENCODING_KEY', ')"y#;ybk98Q.v\:c+Nnid ^SRYL,cfy3B\'n>3*nN');

    define('CHAMELEON_URL_GOOGLE_JQUERY', 'https://code.jquery.com/jquery-3.3.1.min.js');
    define('CHAMELEON_URL_JQUERY', '/bundles/chameleonsystemchameleonshoptheme/js/jquery/jquery-3.3.1.min.js');

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
}
