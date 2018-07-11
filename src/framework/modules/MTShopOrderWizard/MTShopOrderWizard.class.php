<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class MTShopOrderWizard extends MTShopOrderWizardCore
{
    /**
     * {@inheritdoc}
     */
    public function GetHtmlHeadIncludes()
    {
        $aIncludes = parent::GetHtmlHeadIncludes();
        if (!is_array($aIncludes)) {
            $aIncludes = array();
        }
        $aIncludes[] = '<script type="text/javascript" src="/bundles/chameleonsystemchameleonshoptheme/snippets/pkgShop/shippingAndPayment/selectPayment.js"></script>';

        return $aIncludes;
    }
}
