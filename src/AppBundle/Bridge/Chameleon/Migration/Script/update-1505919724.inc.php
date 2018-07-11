<h1>dbversion-update - Build #1505919724</h1>
<h2>Date: 2015-08-05</h2>
<div class="changelog">
    - remove pkgTrustedShops
</div>
<?php

TCMSLogChange::deleteField('shop', 'trusted_shops_key');
TCMSLogChange::deleteField('shop', 'trusted_shops_money_back_cms_media_id');

TCMSLogChange::deleteTabBySystemName('shop', 'TrustedShops');

$query = "DELETE FROM `cms_tpl_module` WHERE `classname` = 'MTPkgTrustedShops'";
TCMSLogChange::RunQuery(__LINE__, $query, array());

TCMSLogChange::deleteVirtualNonDbExtension(__LINE__, 'TShopStepOrderCompleted', 'TShopStepTrustedShops');

TCMSLogChange::deleteVirtualEntryPoint('TPkgTrustedShops');

TCMSLogChange::deleteExtensionAutoParentFromTable('shop_order', 'TPkgTrustedShops_TShopOrder');
