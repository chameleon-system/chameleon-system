<h1>dbversion-update - Build #1508155408</h1>
<h2>Date: 2015-08-05</h2>
<div class="changelog">
    - Set final snippet chain
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('pkg_cms_theme', 'de')
    ->setFields(array(
        'snippet_chain' => '@ChameleonSystemCoreBundle/Resources/views
@ChameleonSystemThemeShopStandardBundle
@ChameleonSystemAmazonPaymentBundle/Resources/views
../extensions
standard',
    ))
    ->setWhereEquals(array(
        'id' => 'e849a269-7426-5a94-661f-c5d9af7ba751',
    ))
;
TCMSLogChange::update(__LINE__, $data);
