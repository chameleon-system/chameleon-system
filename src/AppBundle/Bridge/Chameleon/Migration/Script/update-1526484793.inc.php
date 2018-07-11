<h1>Build #1526484793</h1>
<h2>Date: 2018-05-16</h2>
<div class="changelog">
    - Fix indices
</div>
<?php

use Doctrine\DBAL\Connection;

$fieldList = [
    'CMSFIELD_NUMBER',
    'CMSFIELD_AUTONUMBER',
    'CMSFIELD_GENDER',
    'CMSFIELD_PASSWORD  ',
    'CMSFIELD_URL',
    'CMSFIELD_TIMEZONE',
    'CMSFIELD_COLOR',
    'CMSFIELD_SEPERATOR',
    'CMSFIELD_STRING',
    'CMSFIELD_LIST',
    'CMSFIELD_FIELDNAME',
    'CMSFIELD_PROPERTY',
    'CMSFIELD_ICON',
    'CMSFIELD_EMAIL',
];

$query = "UPDATE `cms_field_type` SET `indextype` = 'none' WHERE `constname` IN (:fields)";

TCMSLogChange::getDatabaseConnection()->executeQuery($query, [
        'fields' => $fieldList,
    ], [
        'fields' => Connection::PARAM_STR_ARRAY,
]);

TCMSLogChange::RunQuery(__LINE__, 'DELETE FROM `shop_article_stats`');

TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stats` DROP INDEX `shop_article_id`');
TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stats` ADD UNIQUE INDEX `shop_article_id` (`shop_article_id` ASC)');

TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stats` DROP INDEX `stats_sales`');
TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stats` DROP INDEX `stats_detail_views`');
TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stats` DROP INDEX `stats_review_count`');
