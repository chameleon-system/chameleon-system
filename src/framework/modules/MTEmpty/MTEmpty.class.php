<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * represents a placeholder for a module. here no instance/module has been assigned
 * to the placeholder... so on the website we display nothing, and in the cms
 * view we just display the selector.
 */
class MTEmpty extends TUserCustomModelBase
{
    /**
     * {@inheritdoc}
     */
    public function _AllowCache()
    {
        return true;
    }
}
