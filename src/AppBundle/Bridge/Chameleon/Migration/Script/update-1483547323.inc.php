<h1>update - Build #1483547323</h1>
<h2>Date: 2017-01-04</h2>
<div class="changelog">
</div>
<?php

  $data = TCMSLogChange::createMigrationQueryData('data_mail_profile', 'de')
      ->setFields(array(
          'body' => '<div>Sehr geehrte(r) [{firstname}] [{lastname}],</div>

<div>&nbsp;</div>

<div>schade, dass Sie sich abmelden möchten.</div>

<div>&nbsp;</div>

<div>Bitte beachten Sie, dass Sie erst abgemeldet sind, wenn Sie durch einen Klick auf folgenden Link Ihre Abmeldung bestätigt haben.</div>

<div>&nbsp;</div>

<div>[{linkblock}]</div>
',
          'body_text' => 'Sehr geehrte(r) [{firstname}] [{lastname}],

schade, dass Sie sich abmelden möchten.

Bitte beachten Sie, dass Sie erst abgemeldet sind, wenn Sie durch einen Klick auf folgenden Link Ihre Abmeldung bestätigt haben.

[{linkblock}] ',
      ))
      ->setWhereEquals(array(
          'idcode' => 'newsletter-double-opt-out',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);
