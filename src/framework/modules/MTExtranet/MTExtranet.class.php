<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use ChameleonSystem\CoreBundle\ServiceLocator;
use ChameleonSystem\ShopBundle\Interfaces\ShopServiceInterface;

class MTExtranet extends MTExtranetCore
{
    protected function PrepareSubmittedData(&$aData)
    {
        parent::PrepareSubmittedData($aData);

        $shop = $this->getShopService()->getActiveShop();
        $aData['shop_id'] = $shop->id;
    }

    public function GetHtmlHeadIncludes()
    {
        $aIncludes = parent::GetHtmlHeadIncludes();
        $aIncludes = array_merge($aIncludes, $this->getResourcesForSnippetPackage('common/userInput/form'));
        $aIncludes = array_merge($aIncludes, $this->getResourcesForSnippetPackage('common/textBlock'));

        return $aIncludes;
    }

    private function getShopService(): ShopServiceInterface
    {
        return ServiceLocator::get('chameleon_system_shop.shop_service');
    }
}
