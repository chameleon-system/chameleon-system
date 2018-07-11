<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class MTPkgMultiModule extends MTPkgMultiModuleCore
{
    /**
     * hook is executed every time after a module instance was set into the array $aModuleInstances.
     *
     * @param TdbPkgMultiModuleSetItem $oSetItem
     * @param TdbCmsTplModuleInstance  $oModuleInstance
     */
    protected function PostAssertInstanceHook($oSetItem, $oModuleInstance)
    {
        if ('noticelist' == $oSetItem->fieldSystemName) {
            $oUser = TdbDataExtranetUser::GetInstance();
            $aNoticeListArticles = $oUser->GetNoticeListArticles();
            if (null === $aNoticeListArticles || 0 === count($aNoticeListArticles)) {
                unset($this->aSetItems[$oModuleInstance->id]);
            }
        }
        if ('lastseen' == $oSetItem->fieldSystemName) {
            $oUser = TdbDataExtranetUser::GetInstance();
            $aViewHistory = $oUser->GetArticleViewHistory();
            if (null === $aViewHistory || 0 === count($aViewHistory)) {
                unset($this->aSetItems[$oModuleInstance->id]);
            }
        }
    }
}
