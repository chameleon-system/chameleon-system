<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class MTFeedback extends MTFeedbackCore
{
    public function _GetMailBody()
    {
        $sCountry = '';
        if (!empty($this->data['aInput']['data_country_id'])) {
            $oCountry = TdbDataCountry::GetNewInstance();
            if ($oCountry->Load($this->data['aInput']['data_country_id'])) {
                $sCountry = $oCountry->GetName();
            }
        }

        $mailBody = "Kundenkontakt:\n"
            .'E-Mail:  '.$this->data['aInput']['email']."\n"
            ."Betreff: {$this->data['aInput']['subject']}\n"
            .'Name: '.$this->data['aInput']['firstname'].' '.$this->data['aInput']['name']."\n"
            .'Firma: '.$this->data['aInput']['address_additional_info']."\n"
            .'Strasse: '.$this->data['aInput']['street']."\n"
            .'Postleitzahl: '.$this->data['aInput']['postalcode']."\n"
            .'Ort: '.$this->data['aInput']['city']."\n"
            .'Land: '.$sCountry."\n"
            .'Telefon: '.$this->data['aInput']['tel']."\n"
            ."\n"
            ."Nachricht:\n"
            .$this->data['aInput']['body'];

        return $mailBody;
    }

    public function _GetUserData()
    {
        parent::_GetUserData();
        $this->data['aInput']['firstname'] = $this->global->GetUserData('firstname');
        $this->data['aInput']['address_additional_info'] = $this->global->GetUserData('address_additional_info');
        $this->data['aInput']['street'] = $this->global->GetUserData('street');
        $this->data['aInput']['postalcode'] = $this->global->GetUserData('postalcode');
        $this->data['aInput']['city'] = $this->global->GetUserData('city');
        $this->data['aInput']['tel'] = $this->global->GetUserData('tel');
        $this->data['aInput']['data_country_id'] = $this->global->GetUserData('data_country_id');
    }
}
