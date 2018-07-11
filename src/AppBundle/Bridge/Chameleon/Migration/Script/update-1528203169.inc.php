<h1>Build #1528203169</h1>
<h2>Date: 2018-06-05</h2>
<div class="changelog">
    - Fix indices
</div>
<?php

TCMSLogChange::RunQuery(__LINE__, 'DELETE FROM `shop_article_stock`');

TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stock` DROP INDEX `shop_article_id`');
TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stock` ADD UNIQUE INDEX `shop_article_id` (`shop_article_id` ASC)');

TCMSLogChange::RunQuery(__LINE__, 'ALTER TABLE `shop_article_stock` DROP INDEX `amount`');
