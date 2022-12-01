<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class MTExtranet extends MTExtranetCore
{
    protected function PrepareSubmittedData($aData)
    {
        parent::PrepareSubmittedData($aData);
        $oShop = TdbShop::GetInstance();
        $aData['shop_id'] = $oShop->id;
    }

    public function GetHtmlHeadIncludes()
    {
        $aIncludes = parent::GetHtmlHeadIncludes();
        $aIncludes = array_merge($aIncludes, $this->getResourcesForSnippetPackage('common/userInput/form'));
        $aIncludes = array_merge($aIncludes, $this->getResourcesForSnippetPackage('common/textBlock'));

        return $aIncludes;
    }
}
