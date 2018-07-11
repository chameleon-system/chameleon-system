<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use ChameleonSystem\CoreBundle\Interfaces\FlashMessageServiceInterface;
use ChameleonSystem\CoreBundle\ServiceLocator;
use ChameleonSystem\ExtranetBundle\Interfaces\ExtranetUserProviderInterface;

class TCMSWizardStepEditUserProfile extends TdbCmsWizardStep
{
    protected $aUserInput = [];
    protected $aUserFields = array(
        'alias_name', 'birthdate',
    );
    protected $aUserRequiredFields = array();
    const MSG_MANAGER_NAME = 'TCMSWizardStepEditUserProfil';

    /**
     * method is called from the init method of the calling module. here you can check
     * if the step may be viewed, and redirect to another step if the user does not have permission.
     */
    public function Init()
    {
        $oExtranetUser = $this->getExtranetUserProvider()->getActiveUser();
        $oLocal = TCMSLocal::GetActive();
        $this->aUserInput['birthdate'] = $oLocal->FormatDate($oExtranetUser->fieldBirthdate, TCMSLocal::DATEFORMAT_SHOW_DATE);

        $inputFilterUtil = $this->getInputFilterUtil();
        $aUserInputFromForm = $inputFilterUtil->getFilteredPostInput('aUserInput');
        if (!is_array($aUserInputFromForm)) {
            $aUserInputFromForm = array();
        }
        foreach ($this->aUserInput as $sField => $sValue) {
            if (array_key_exists($sField, $aUserInputFromForm)) {
                $this->aUserInput[$sField] = $aUserInputFromForm[$sField];
            }
        }
        reset($this->aUserFields);
    }

    /**
     * use this method to add any variables to the render method that you may
     * require for some view.
     *
     * @param string $sViewName - the view being requested
     * @param string $sViewType - the location of the view (Core, Custom-Core, Customer)
     *
     * @return array
     */
    protected function &GetAdditionalViewVariables($sViewName, $sViewType)
    {
        $aViewVariables = array();

        $oMsgManager = $this->getFlashMessageService();

        $aInitInputData = $this->aUserFields;
        $aFieldMessages = array();
        foreach ($aInitInputData as $sField) {
            if (!array_key_exists($sField, $this->aUserInput)) {
                $this->aUserInput[$sField] = '';
            }
            $aFieldMessages[$sField] = false;
            $sConsumerName = self::MSG_MANAGER_NAME.$sField;
            if ($oMsgManager->consumerHasMessages($sConsumerName)) {
                $aFieldMessages[$sField] = $oMsgManager->renderMessages($sConsumerName);
            }
        }
        $aViewVariables['aFieldMessages'] = $aFieldMessages;
        $aViewVariables['aUserInput'] = $this->aUserInput;

        return $aViewVariables;
    }

    /**
     * {@inheritdoc}
     */
    protected function ProcessStep()
    {
        $bContinue = parent::ProcessStep();

        if ($this->ValidateUserData()) {
            $oLocal = TCMSLocal::GetActive();

            $oExtranetUser = $this->getExtranetUserProvider()->getActiveUser();
            $aUserData = $oExtranetUser->sqlData;

            $aUserData['birthdate'] = $oLocal->StringToDate($this->aUserInput['birthdate']); // this value belongs to the user... so update there instead
            $oExtranetUser->LoadFromRow($aUserData);
            $oExtranetUser->Save();

            $oMsgManager = $this->getFlashMessageService();
            $oMsgManager->addMessage(MTCMSWizardCore::MSG_HANDLER_NAME, 'USER-PROFILE-DATA-UPDATED');
            $this->JumpToStep($this);
        } else {
            $bContinue = false;
        }

        return $bContinue;
    }

    /**
     * validate the user input.
     *
     * @return bool
     */
    protected function ValidateUserData()
    {
        $bIsValid = true;

        $oMsgManager = $this->getFlashMessageService();
        $aRequiredFields = $this->aUserRequiredFields;
        foreach ($aRequiredFields as $sFieldName) {
            $sVal = trim($this->aUserInput[$sFieldName]);
            if (empty($sVal)) {
                $bIsValid = false;
                $oMsgManager->addMessage(self::MSG_MANAGER_NAME.$sFieldName, 'ERROR-USER-REQUIRED-FIELD-MISSING');
            }
        }

        return $bIsValid;
    }

    /**
     * @return ExtranetUserProviderInterface
     */
    private function getExtranetUserProvider()
    {
        return ServiceLocator::get('chameleon_system_extranet.extranet_user_provider');
    }

    /**
     * @return FlashMessageServiceInterface
     */
    private function getFlashMessageService()
    {
        return ServiceLocator::get('chameleon_system_core.flash_messages');
    }
}
