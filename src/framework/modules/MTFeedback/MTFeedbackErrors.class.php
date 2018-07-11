<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class MTFeedbackErrors
{
    public $_errorRegister = array();

    public function AddError($field, $error)
    {
        if (!array_key_exists($field, $this->_errorRegister)) {
            $this->_errorRegister[$field] = array();
        }
        $this->_errorRegister[$field][] = $error;
    }

    public function FieldHasErrors($field)
    {
        return array_key_exists($field, $this->_errorRegister);
    }

    public function GetFieldErrors($field)
    {
        if ($this->FieldHasErrors($field)) {
            return $this->_errorRegister[$field];
        } else {
            return false;
        }
    }

    /**
     * are errors registered.
     *
     * @return bool
     */
    public function HasErrors()
    {
        return count($this->_errorRegister) > 0;
    }
}
