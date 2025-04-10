<h1>Build #1735542475</h1>
<h2>Date: 2024-12-30</h2>
<div class="changelog">
    - deactivate changelog by default
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('cms_tbl_conf', 'de')
  ->setFields([
      'changelog_active' => '0',
  ])
  ->setWhereEquals([
      'changelog_active' => '1',
  ])
;
TCMSLogChange::update(__LINE__, $data);
