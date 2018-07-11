<h1>update - Build #1487068512</h1>
<h2>Date: 2017-02-14</h2>
<div class="changelog">
    - delete old update counters
</div>
<?php

  $data = TCMSLogChange::createMigrationQueryData('cms_config_parameter', 'en')
      ->setWhereEquals(array(
          'systemname' => 'pkgCmsClassManager',
      ))
  ;
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgComment',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgCsv2Sql',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgExtranet',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgExtranetRegistrationGuest',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgMultiModule',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgMultiModuleLanguage',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgShopRatingService',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'pkgUrlAlias',
      ));
  TCMSLogChange::delete(__LINE__, $data);

  $data
      ->setWhereEquals(array(
          'systemname' => 'shop-payment-sofortueberweisung',
      ));
  TCMSLogChange::delete(__LINE__, $data);
