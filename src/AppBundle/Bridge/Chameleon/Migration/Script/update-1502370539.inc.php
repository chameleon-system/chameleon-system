<h1>update - Build #1502370539</h1>
<h2>Date: 2017-08-10</h2>
<div class="changelog">
    - remove outdated modules and URL handlers
</div>
<?php

use ChameleonSystem\DatabaseMigration\Constant\QueryConstants;
use Doctrine\Common\Collections\Expr\Comparison;

$moduleIds = array(
    '4', // MTList
    '39', // MTSitemap
    '49', // MTShopUserNoticeList
    '50', // MTShopShippingInfo
    '55', // MTShopCategoryShowcase
    '56', // MTPkgShopShowcase
    '0bc3ba09-bec1-436a-b828-f6e93854486b', // MTImageTeaser
    '25607764-b874-f511-635e-319443d8639f', // MTPkgNewsletterSignupTeaser
    '82147fa4-62c8-e659-05a8-b7701b852dbf', // MTShopCategoryNavigation
    'aeef3908-e653-580e-a20c-5948088850b8', // MTNewsletterQuickSignupForm
);

$moduleWhereExpressions = array(
    new Comparison('source_id', Comparison::IN, $moduleIds),
);
$moduleWhereExpressionsFieldTypes = array(
    'source_id' => QueryConstants::FIELDTYPE_ARRAY,
);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_tbl_conf_mlt', 'en')
    ->setWhereExpressions($moduleWhereExpressions)
    ->setWhereExpressionsFieldTypes($moduleWhereExpressionsFieldTypes)
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_usergroup_mlt', 'en')
    ->setWhereExpressions($moduleWhereExpressions)
    ->setWhereExpressionsFieldTypes($moduleWhereExpressionsFieldTypes)
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_portal_mlt', 'en')
    ->setWhereExpressions($moduleWhereExpressions)
    ->setWhereExpressionsFieldTypes($moduleWhereExpressionsFieldTypes)
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setWhereExpressions(array(
        new Comparison('id', Comparison::IN, $moduleIds),
    ))
    ->setWhereExpressionsFieldTypes($moduleWhereExpressionsFieldTypes)
;
TCMSLogChange::delete(__LINE__, $data);

$urlHandlerIds = array(
    '9', // TCMSSmartURLHandler_ShopProductExport
);

foreach ($urlHandlerIds as $urlHandlerId) {
    $data = TCMSLogChange::createMigrationQueryData('cms_smart_url_handler_cms_portal_mlt', 'de')
        ->setWhereEquals(array(
            'source_id' => $urlHandlerId,
        ))
    ;
    TCMSLogChange::delete(__LINE__, $data);

    $data = TCMSLogChange::createMigrationQueryData('cms_smart_url_handler', 'de')
        ->setWhereEquals(array(
            'id' => $urlHandlerId,
        ))
    ;
    TCMSLogChange::delete(__LINE__, $data);
}
