<h1>Build #1521548567</h1>
<h2>Date: 2018-03-20</h2>
<div class="changelog">
    - #41178: Set Chameleon Shop Theme as the new standard
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('pkg_cms_theme', 'de')
  ->setFields([
      'snippet_chain' => '@ChameleonSystemCoreBundle/Resources/views
@ChameleonSystemChameleonShopThemeBundle/Resources/views
../extensions
standard',
      'less_file' => '/assets/standard-assets/less/chameleon.less',
  ])
  ->setWhereEquals([
      'id' => 'e849a269-7426-5a94-661f-c5d9af7ba751',
  ])
;
TCMSLogChange::update(__LINE__, $data);
