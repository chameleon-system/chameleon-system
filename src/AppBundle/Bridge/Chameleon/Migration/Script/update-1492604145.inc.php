<h1>update - Build #1492604145</h1>
<h2>Date: 2017-04-19</h2>
<div class="changelog">
    - remove custom extranet user class
</div>
<?php

TCMSLogChange::deleteExtensionAutoParentFromTable('data_extranet_user', 'TCustomDataExtranetUser');
