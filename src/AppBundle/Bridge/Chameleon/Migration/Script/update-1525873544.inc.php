<h1>Build #1525873544</h1>
<h2>Date: 2018-05-09</h2>
<div class="changelog">
    - #41894: Login-Page move login-spot to primary spot with full width
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_page_cms_master_pagedef_spot', 'de')
  ->setFields([
      'cms_master_pagedef_spot_id' => '130ac842-3c64-fd3a-7930-6ae41b45d669',
  ])
  ->setWhereEquals([
      'id' => 'f312e264-17e8-15b5-f522-320efa0705c7',
  ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_page', 'de')
  ->setFields([
      'name' => 'Login',
  ])
  ->setWhereEquals([
      'id' => '8',
  ])
;
TCMSLogChange::update(__LINE__, $data);

