<h1>Build #1570449006</h1>
<h2>Date: 2019-10-07</h2>
<div class="changelog">
    - #33265 Telephone-Order-Info-Text had an unknown telephon-no. Changed to Esono-Phone-No.
</div>
<?php

$data = TCMSLogChange::createMigrationQueryData('pkg_cms_text_block', 'de')
  ->setFields([
      'systemname' => 'telephone_order_info_text',
//      'name' => 'Telefonbestellunginfotext',
      'content' => '<p><strong>Wir sind für Sie da:</strong></p>

<table border="0" cellpadding="3" cellspacing="0" style="width: 100%; border-collapse: collapse">
	<tbody>
		<tr valign="top">
			<td style="width: 25%">Mo – Fr</td>
			<td style="width: 75%">11 – 19 Uhr</td>
		</tr>
		<tr valign="top">
			<td>Sa</td>
			<td>11 – 17 Uhr</td>
		</tr>
	</tbody>
</table>

<p>Falls Sie Fragen haben, rufen Sie uns bitte an:</p>

<p><strong>+49 (0) 761 151828-0</strong></p>
',
  ])
  ->setWhereEquals([
      'id' => 'adad85ec-cfd7-6d7b-ebd6-22fdf751c038',
  ])
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('pkg_cms_text_block', 'en')
  ->setFields([
      'systemname' => 'telephone_order_info_text',
//      'name' => 'Order by phone',
      'content' => '<p><strong>We are there for you:</strong></p>

<table border="0" cellpadding="3" cellspacing="0" style="width: 100%; border-collapse: collapse">
	<tbody>
		<tr valign="top">
			<td style="width: 25%">Mon – Fri</td>
			<td style="width: 75%">11 – 19 h</td>
		</tr>
		<tr valign="top">
			<td>Sat</td>
			<td>11 – 17 h</td>
		</tr>
	</tbody>
</table>

<p>If you have questions, please contact us:</p>

<p><strong>+49 (0) 761 151828</strong></p>
',
  ])
  ->setWhereEquals([
      'id' => 'adad85ec-cfd7-6d7b-ebd6-22fdf751c038',
  ])
;
TCMSLogChange::update(__LINE__, $data);

