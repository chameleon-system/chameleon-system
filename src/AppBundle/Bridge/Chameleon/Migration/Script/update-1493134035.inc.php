<h1>29882-backend-language - Build #1493134035</h1>
<h2>Date: 2017-04-25</h2>
<div class="changelog">
</div>
<?php

use ChameleonSystem\CoreBundle\ServiceLocator;
use esono\pkgCmsCache\CacheInterface;

TdbCmsConfig::GetInstance(true);
$databaseConnection = TCMSLogChange::getDatabaseConnection();

$data = TCMSLogChange::createMigrationQueryData('cms_field_conf', 'en')
    ->setFields(array(
        'modifier' => 'hidden',
    ))
    ->setWhereEquals(array(
        'id' => TCMSLogChange::GetTableFieldId(TCMSLogChange::GetTableId('cms_config'), 'translation_base_language_id'),
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_config', 'en')
    ->setFields(array(
            'translation_base_language_id' => '24',
    ))
    ->setWhereEquals(array(
        'id' => '1',
    ))
;
TCMSLogChange::update(__LINE__, $data);
/**
 * @var CacheInterface $cache
 */
$cache = ServiceLocator::get('chameleon_system_cms_cache.cache');
$cache->callTrigger('cms_config');

$data = TCMSLogChange::createMigrationQueryData('cms_config_cms_language_mlt', 'en')
    ->setFields(array(
        'source_id' => '1',
        'target_id' => '22',
        'entry_sort' => '2',
    ))
;
TCMSLogChange::insert(__LINE__, $data);

TCMSLogChange::makeFieldMonolingual('cms_right', 'name');
TCMSLogChange::makeFieldMonolingual('cms_role', 'name');

TdbCmsConfig::GetInstance(true);

$query = "SELECT `cms_field_conf`.*, `cms_field_conf`.`id` AS field_id, `cms_field_conf`.`cms_tbl_conf_id` as table_id,
                 `cms_field_conf`.`name` AS field_name, `cms_tbl_conf`.`name` as table_name
                FROM `cms_field_conf`
          INNER JOIN `cms_tbl_conf` ON `cms_field_conf`.`cms_tbl_conf_id` = `cms_tbl_conf`.`id`
               WHERE `cms_field_conf`.`is_translatable` = '1'";
$fieldList = $databaseConnection->fetchAll($query);

foreach ($fieldList as $fieldData) {
    $tableName = $fieldData['table_name'];
    $fieldName = $fieldData['field_name'];
    $query = sprintf("SHOW FIELDS FROM `%s` WHERE `field` = '%s'", $tableName, $fieldName);
    $fieldDetails = $databaseConnection->fetchAssoc($query);
    $fieldType = $fieldDetails['Type'];

    $query = sprintf('ALTER TABLE `%s` ADD `_tmp_%s` %s', $tableName, $fieldName, $fieldType);
    TCMSLogChange::RunQuery(__LINE__, $query, array());
    $query = sprintf('UPDATE `%s` SET `_tmp_%s` = `%s__en`', $tableName, $fieldName, $fieldName);
    TCMSLogChange::RunQuery(__LINE__, $query, array());

    $fieldDef = TdbCmsFieldConf::GetNewInstance($fieldData);
    $fieldDef->UpdateFieldTranslationKeys();

    $query = sprintf('UPDATE `%s` SET `%s__de` =  `%s`, `%s` = `_tmp_%s`', $tableName, $fieldName, $fieldName, $fieldName, $fieldName);
    TCMSLogChange::RunQuery(__LINE__, $query, array());

    $query = sprintf('ALTER TABLE `%s` DROP `_tmp_%s`', $tableName, $fieldName);
    TCMSLogChange::RunQuery(__LINE__, $query, array());
}
