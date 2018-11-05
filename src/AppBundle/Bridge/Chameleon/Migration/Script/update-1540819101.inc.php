<h1>Build #1540819101</h1>
<h2>Date: 2018-10-29</h2>
<div class="changelog">
    - Configure search for different languages
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'shop_id' => '1',
      'cms_language_id' => '22',
      'name' => 'Name',
      'tablename' => 'shop_article',
      'fieldname' => 'name__de',
      'weight' => '1.0000',
      'shop_search_query_id' => '1',
      'field_name_in_query' => 'name__de',
      'index_partial_words' => '1',
      'id' => TCMSLogChange::createUnusedRecordId('shop_search_field_weight'),
  ])
;
TCMSLogChange::insert(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'cms_language_id' => '24',
  ])
  ->setWhereEquals([
      'id' => '6868ba6a-2ddd-098e-6fe7-f2317f0faeb0',
  ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'shop_id' => '1',
      'cms_language_id' => '22',
      'name' => 'Hersteller',
      'tablename' => 'shop_manufacturer',
      'fieldname' => 'name__de',
      'weight' => '0.8000',
      'shop_search_query_id' => '3',
      'field_name_in_query' => 'name__de',
      'index_partial_words' => '1',
      'id' => TCMSLogChange::createUnusedRecordId('shop_search_field_weight'),
  ])
;
TCMSLogChange::insert(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'cms_language_id' => '24',
  ])
  ->setWhereEquals([
      'id' => '12',
  ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'shop_id' => '1',
      'cms_language_id' => '22',
      'name' => 'Varianten',
      'tablename' => 'shop_variant_type_value',
      'fieldname' => 'name__de',
      'weight' => '0.8000',
      'shop_search_query_id' => '69536ade-8d48-709c-fa43-56ac787ab2cb',
      'field_name_in_query' => 'name__de',
      'index_partial_words' => '1',
      'id' => TCMSLogChange::createUnusedRecordId('shop_search_field_weight'),
  ])
;
TCMSLogChange::insert(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'cms_language_id' => '24',
  ])
  ->setWhereEquals([
      'id' => '4224091a-6f55-de45-fc6b-29b2c58ffc24',
  ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'shop_id' => '1',
      'cms_language_id' => '22',
      'name' => 'Kategorie',
      'tablename' => 'shop_category',
      'fieldname' => 'name__de',
      'weight' => '0.7500',
      'shop_search_query_id' => '2',
      'field_name_in_query' => 'name__de',
      'index_partial_words' => '1',
      'id' => TCMSLogChange::createUnusedRecordId('shop_search_field_weight'),
  ])
;
TCMSLogChange::insert(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
    ->setFields([
        'cms_language_id' => '24',
    ])
    ->setWhereEquals([
        'id' => '8bc9d0e2-5143-4e0d-886d-5f4b4788d3b0',
    ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'shop_id' => '1',
      'cms_language_id' => '22',
      'name' => 'Beschreibung',
      'tablename' => 'shop_article',
      'fieldname' => 'description__de',
      'weight' => '0.5000',
      'shop_search_query_id' => '1',
      'field_name_in_query' => 'description__de',
      'index_partial_words' => '1',
      'id' => TCMSLogChange::createUnusedRecordId('shop_search_field_weight'),
  ])
;
TCMSLogChange::insert(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('shop_search_field_weight', 'en')
  ->setFields([
      'cms_language_id' => '24',
  ])
  ->setWhereEquals([
      'id' => '99961a74-66ae-b3f3-a7bc-778ea525a161',
  ])
;
TCMSLogChange::update(__LINE__, $data);
