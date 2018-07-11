<h1>update - Build #1492603970</h1>
<h2>Date: 2017-04-19</h2>
<div class="changelog">
    - remove old CSV import
</div>
<?php

  $data = TCMSLogChange::createMigrationQueryData('cms_interface_manager_parameter', 'en')
      ->setWhereEquals(array(
          'id' => 'c1349912-2a83-12ce-f3c1-b8f4a8dd30d2',
      ))
  ;
  TCMSLogChange::delete(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_interface_manager_cms_usergroup_mlt', 'en')
      ->setWhereEquals(array(
          'source_id' => '34bac284-6650-1c5c-a987-8f91f0c38d9b',
      ))
  ;
  TCMSLogChange::delete(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_interface_manager', 'en')
      ->setWhereEquals(array(
          'id' => '34bac284-6650-1c5c-a987-8f91f0c38d9b',
      ))
  ;
  TCMSLogChange::delete(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_cronjobs', 'en')
      ->setWhereEquals(array(
          'id' => 'ea7ab144-6684-e371-55df-08f22c9a0ae8',
      ))
  ;
  TCMSLogChange::delete(__LINE__, $data);
