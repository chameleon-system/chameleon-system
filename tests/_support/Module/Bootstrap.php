<?php

namespace Module;


use Doctrine\DBAL\Driver\PDOConnection;
use Step\Acceptance\Account\Account;
use Step\Acceptance\Product\Product;
use TTools;

class Bootstrap extends \Codeception\Module
{
    public function _initialize()
    {

    }

    // HOOK: before each suite
    public function _beforeSuite($settings = array())
    {
        /** @var PDOConnection $dbh */
        $dbh = $this->getModule('Db')->_getDbh();

        $productUUID = TTools::GetUUID();
        $addDummyProductQuery = sprintf(
            "INSERT INTO `shop_article` 
    (`id`, `cmsident`, `name`, `list_rank`, `datecreated`, `active`, `articlenumber`, `description_short`,
     `description`, `shop_manufacturer_id`, `price`, `price_reference`, `shop_vat_id`, `size_weight`, `size_width`, 
     `size_height`, `size_length`, `virtual_article`, `exclude_from_vouchers`, `subtitle`, `is_new`, `usp`,
     `exclude_from_shipping_cost_calculation`, `shop_stock_message_id`, `stars`, `shop_category_id`, `is_bundle`,
     `download`, `is_searchable`, `exclude_from_discounts`, `shop_variant_definition_info`, `shop_variant_set_id`,
     `variant_parent_id`, `cms_media_default_preview_image_id`, `seo_pattern`, `meta_separator_hidden`, `meta_keywords`,
     `variant_parent_is_active`, `name_variant_info`, `show_preorder_on_zero_stock`, `quantity_in_units`,
     `shop_unit_of_measurement_id`, `meta_description`, `name__de`, `description_short__de`,
     `description__de`, `subtitle__de`, `usp__de`, `meta_keywords__de`, `name_variant_info__de`,
     `meta_description__de`, `test`, `testfeld`) VALUES
('%s',	'',	'',	0,	'',	'1',
 '%s',	'',	'',	'',	%f,	0.00,	'1',	0.00,	0.000,	0.000,	0.000,	'0',
 '0',	'',	'0',	'',	'0',	'6',	'',	'',	'0',	'',	'1',	'0',	'Varianten',	'',	'',	'1',	'',	'',	'',	'1',	
 '',	'0',	0.0000,	'',	'',	'%s',	'',	'',	'',	'',	'',	'',	'',	0.00,	0.00);",

            $productUUID,
            Product::ARTICLE_NUMBER,
            Product::PRICE_BRUTTO,
            Product::NAME
                );
        $dbh->query($addDummyProductQuery);
        $productCMSident = $dbh->lastInsertId();


        $addDummyProductStockQuery = sprintf("INSERT INTO `shop_article_stock` 
    (`id`, `cmsident`, `shop_article_id`, `amount`) VALUES
    ('%s',	'',	'%s',	3);",
        TTools::GetUUID(),
            $productUUID,
        Product::STOCK_COUNT);

        $dbh->query($addDummyProductStockQuery);
        $productStockCMSident = $dbh->lastInsertId();

        Product::setCMSident($productCMSident);
        Product::setStockCmsident($productStockCMSident);

    }

    // HOOK: after suite
    public function _afterSuite()
    {
        /** @var PDOConnection $dbh */
        $dbh = $this->getModule('Db')->_getDbh();

        $deleteUserQuery = sprintf("DELETE FROM `data_extranet_user` WHERE `name` = '%s'", Account::TEST_USER_EMAIL);
        $dbh->query($deleteUserQuery);

        $deleteUserQuery = sprintf("DELETE FROM `data_extranet_user` WHERE `name` = '%s'", Account::TEST_CHECKOUT_NEW_USER_MAIL);
        $dbh->query($deleteUserQuery);

        $deleteProductQuery = sprintf("DELETE FROM `shop_article` WHERE `cmsident` = '%s'", Product::getCmsident());
        $dbh->query($deleteProductQuery);

        $deleteProductStockQuery = sprintf("DELETE FROM `shop_article_stock` WHERE `cmsident` = '%s'", Product::getStockCmsident());
        $dbh->query($deleteProductStockQuery);

        $cancelTestUserOrderQuery = sprintf("UPDATE `shop_order` SET `canceled` = '1' WHERE `user_email` = '%s'", Account::TEST_USER_EMAIL);
        $cancelNewUserOrderQuery = sprintf("UPDATE `shop_order` SET `canceled` = '1' WHERE `user_email` = '%s'", Account::TEST_CHECKOUT_NEW_USER_MAIL);
        $cancelGuestOrderQuery = sprintf("UPDATE `shop_order` SET `canceled` = '1' WHERE `user_email` = '%s'", Account::TEST_GUEST_USER_EMAIL);

        $dbh->query($cancelTestUserOrderQuery);
        $dbh->query($cancelNewUserOrderQuery);
        $dbh->query($cancelGuestOrderQuery);

    }

    // HOOK: before each step
    public function _beforeStep(\Codeception\Step $step)
    {

    }

    // HOOK: after each step
    public function _afterStep(\Codeception\Step $step)
    {

    }

    // HOOK: before test
    public function _before(\Codeception\TestInterface $test)
    {

    }

    // HOOK: after test
    public function _after(\Codeception\TestInterface $test)
    {

    }

    // HOOK: on fail
    public function _failed(\Codeception\TestInterface $test, $fail)
    {

    }
}
