<h1>Build #1536593170</h1>
<h2>Date: 2018-09-10</h2>
<div class="changelog">
    - Increase minimum password length to 8 for extranet users.
</div>
<?php

TCMSLogChange::requireBundleUpdates('ChameleonSystemExtranetBundle', 1536589748);

$data = TCMSLogChange::createMigrationQueryData('cms_field_conf', 'en')
    ->setFields([
        'fieldtype_config' => 'minimumLength=8',
    ])
    ->setWhereEquals([
        'id' => TCMSLogChange::GetTableFieldId(TCMSLogChange::GetTableId('data_extranet_user'), 'password'),
    ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_wizard_step', 'en')
  ->setFields([
      'display_name' => 'Change password',
      'name' => '',
      'description' => '<ul>
	<li>Do not use a password which you are already using for other online accounts.</li>
	<li>Your new password must contain at least 8 characters.</li>
	<li>Use a combination of letters, numbers and punctuation marks.</li>
	<li>The password is case sensitive. Please check that the caps lock key is not activated.</li>
</ul>
',
  ])
  ->setWhereEquals([
      'systemname' => 'profiledatapassword',
  ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_wizard_step', 'de')
  ->setFields([
      'description' => '<ul>
	<li>Verwenden Sie kein Passwort, das Sie bereits für andere Konten online nutzen.</li>
	<li>Ihr neues Passwort muss mindestens 8 Zeichen lang sein.</li>
	<li>Verwenden Sie eine Kombination aus Buchstaben, Zahlen und Satzzeichen.</li>
	<li>Die Groß- und Kleinschreibung wird beachtet. Überprüfen Sie bitte, ob die Feststelltaste aktiviert ist.</li>
</ul>
',
  ])
  ->setWhereEquals([
      'systemname' => 'profiledatapassword',
  ])
;
TCMSLogChange::update(__LINE__, $data);
