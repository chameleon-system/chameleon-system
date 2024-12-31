<h1>Build #1735542475</h1>
<h2>Date: 2024-12-30</h2>
<div class="changelog">
    - deactivate changelog and locking by default
</div>
<?php

TCMSLogChange::RunQuery(__LINE__, "UPDATE `cms_tbl_conf` SET `changelog_active` = '0'");
TCMSLogChange::RunQuery(__LINE__, "UPDATE `cms_tbl_conf` SET `locking_active` = '0'");