<h1>Build #1518528876</h1>
<h2>Date: 2018-02-13</h2>
<div class="changelog">
    - Remove CMSSearchIndex
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('cms_module', 'de')
  ->setWhereEquals([
      'id' => '7',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_cronjobs', 'de')
  ->setWhereEquals([
      'cron_class' => 'TCMSCronJob_CreateSearchIndex',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

TCMSLogChange::deleteTable('cms_search_index');

$databaseConnection = TCMSLogChange::getDatabaseConnection();
$databaseConnection->executeQuery('DROP TABLE `cms_search_index_tmp`');
