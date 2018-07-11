<h1>Build #1530783958</h1>
<h2>Date: 2018-07-05</h2>
<div class="changelog">
    - Remove duplicate modules MTPkgShopArticleReview and MTShopSearchForm
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_usergroup_mlt', 'en')
  ->setWhereEquals([
      'source_id' => '4e47bf8d-4afa-cfab-1ccc-481db23e8a3c',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_portal_mlt', 'en')
  ->setWhereEquals([
      'source_id' => '4e47bf8d-4afa-cfab-1ccc-481db23e8a3c',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_tbl_conf_mlt', 'en')
  ->setWhereEquals([
      'source_id' => '4e47bf8d-4afa-cfab-1ccc-481db23e8a3c',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
  ->setWhereEquals([
      'id' => '4e47bf8d-4afa-cfab-1ccc-481db23e8a3c',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_usergroup_mlt', 'en')
  ->setWhereEquals([
      'source_id' => 'a14f98cd-de0d-bb2d-b8ec-75622385d32b',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_portal_mlt', 'en')
  ->setWhereEquals([
      'source_id' => 'a14f98cd-de0d-bb2d-b8ec-75622385d32b',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module_cms_tbl_conf_mlt', 'en')
  ->setWhereEquals([
      'source_id' => 'a14f98cd-de0d-bb2d-b8ec-75622385d32b',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
  ->setWhereEquals([
      'id' => 'a14f98cd-de0d-bb2d-b8ec-75622385d32b',
  ])
;
TCMSLogChange::delete(__LINE__, $data);

