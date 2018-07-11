<h1>update - Build #1496220311</h1>
<h2>Date: 2017-05-31</h2>
<div class="changelog">
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('cms_config', 'en')
    ->setFields(array(
        'additional_files_to_delete_from_cache' => '',
    ))
    ->setWhereEquals(array(
        'id' => '1',
    ))
;
TCMSLogChange::update(__LINE__, $data);
