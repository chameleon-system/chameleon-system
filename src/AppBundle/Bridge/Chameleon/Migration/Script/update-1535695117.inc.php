<h1>Build #1535695117</h1>
<h2>Date: 2018-08-31</h2>
<div class="changelog">
    - #50: add manufacturer name to table display
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('cms_tbl_conf', 'de')
    ->setFields([
        //'name' => 'shop_article',
        'list_query' => '    SELECT `shop_article`.*,
           `shop_article_stats`.`stats_sales`,
           `shop_article_stats`.`stats_detail_views`,
           `shop_article_stats`.`stats_review_average`,
           `shop_article_stats`.`stats_review_count`,
           `shop_article_stock`.`amount` AS stock,
           `shop_manufacturer`.`name` as manufacturer
      FROM `shop_article`
 LEFT JOIN `shop_article_stats` ON `shop_article`.`id` = `shop_article_stats`.`shop_article_id`
 LEFT JOIN `shop_article_stock` ON `shop_article`.`id` = `shop_article_stock`.`shop_article_id`
 LEFT JOIN `shop_manufacturer` ON `shop_article`.`shop_manufacturer_id` = `shop_manufacturer`.`id`',
    ])
    ->setWhereEquals([
        'id' => '238',
    ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tbl_display_list_fields', 'de')
    ->setFields([
        'title' => 'Herstellername',
        'name' => '`shop_manufacturer`.`name`',
        'db_alias' => 'manufacturer',
        'position' => '5',
        'width' => '-1',
        'align' => 'left',
        'callback_fnc' => '',
        'use_callback' => '0',
        'show_in_list' => '1',
        'show_in_sort' => '0',
    ])
    ->setWhereEquals([
        'id' => '5babd0e0-29c3-c871-31a4-c5e1c59ca6f8',
    ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tbl_display_list_fields', 'en')
    ->setFields([
        'title' => 'Manufacturer name',
    ])
    ->setWhereEquals([
        'id' => '5babd0e0-29c3-c871-31a4-c5e1c59ca6f8',
    ])
;
TCMSLogChange::update(__LINE__, $data);

