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

class MTPkgMultiModule extends MTPkgMultiModuleCore
{
    /**
     * hook is executed every time after a module instance was set into the array $aModuleInstances.
     *
     * @param TdbPkgMultiModuleSetItem $oSetItem
     * @param TdbCmsTplModuleInstance $oModuleInstance
     */
    protected function PostAssertInstanceHook($oSetItem, $oModuleInstance)
    {
        $user = $this->getExtranetUser();

        if ('noticelist' === $oSetItem->fieldSystemName) {
            $aNoticeListArticles = $user->GetNoticeListArticles();
            if (null === $aNoticeListArticles || 0 === count($aNoticeListArticles)) {
                unset($this->aSetItems[$oModuleInstance->id]);
            }
        }

        if ('lastseen' === $oSetItem->fieldSystemName) {
            $aViewHistory = $user->GetArticleViewHistory();
            if (null === $aViewHistory || 0 === count($aViewHistory)) {
                unset($this->aSetItems[$oModuleInstance->id]);
            }
        }
    }

    private function getExtranetUser()
    {
        return ServiceLocator::get('chameleon_system_extranet.extranet_user_provider')->getActiveUser();
    }
}
