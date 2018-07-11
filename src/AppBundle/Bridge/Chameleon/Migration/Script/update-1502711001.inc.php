<h1>update - Build #1502711001</h1>
<h2>Date: 2017-08-14</h2>
<div class="changelog">
    - Rename modules and views.
</div>
<?php

TCMSLogChange::requireBundleUpdates('ChameleonSystemCoreBundle', 1502701712);

$data = TCMSLogChange::createMigrationQueryData('cms_master_pagedef', 'de')
    ->setFields(array(
        'name' => 'Templategalerie',
        'description' => 'Seitenlayout für die Templategalerie',
    ))
    ->setWhereEquals(array(
        'id' => '7618fd39-cb6f-650c-6b31-f402caf5a702',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_master_pagedef', 'en')
    ->setFields(array(
        'name' => 'Template gallery',
        'description' => 'Page layout for the template gallery',
    ))
    ->setWhereEquals(array(
        'id' => '7618fd39-cb6f-650c-6b31-f402caf5a702',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Zeigt eine Shop-Bestellung an. Erwartet die ID der Bestellung im Parameter id. Die Bestellung muss dem aktiven Benutzer gehören.',
        'name' => 'Shop - Bestellungsdetails',
    ))
    ->setWhereEquals(array(
        'id' => 'b5b0d39a-ac26-3abb-5782-65aebfaf1c0b',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Order details',
    ))
    ->setWhereEquals(array(
        'id' => 'b5b0d39a-ac26-3abb-5782-65aebfaf1c0b',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Überschrift, Einleitungstext und Fließtext.',
        'name' => 'Einfacher Text',
    ))
    ->setWhereEquals(array(
        'id' => '6',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'description' => 'Headline, sub-headline and running text.',
        'name' => 'Simple text',
    ))
    ->setWhereEquals(array(
        'id' => '6',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Das Modul zeigt die einzelne Elemente der Tabelle shop_system_info an (z.B. AGB).',
        'name' => 'Shop - Textblöcke',
    ))
    ->setWhereEquals(array(
        'id' => '46',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Prepared text',
    ))
    ->setWhereEquals(array(
        'id' => '46',
    ))
;
TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'accessDenied=Zugriff verweigert
confirm-registration=Registrierung bestätigen
ForgotPassword=Passwort vergessen
login=Anmelden
register=Registrieren
registerGuest=Als Gast anmelden',
          'name' => 'Authentifizierung und Registrierung',
          'description' => 'Über dieses Modul werden Extranet-Komponenten wie "Login", "Logout", "Passwort vergessen" und "Zugriff zum geschützten Bereich verweigert" verwaltet.',
      ))
      ->setWhereEquals(array(
          'id' => '44',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'accessDenied=Access denied
confirm-registration=Confirm registration
ForgotPassword=Forgot password
login=Login
register=Register
registerGuest=Register from order as guest',
          'name' => 'Authentication and registration',
          'description' => 'This module allows to manage extranet components like "Login", "Logout", "Forgot password" and "Access to protected are denied" are managed.',
      ))
      ->setWhereEquals(array(
          'id' => '44',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'vNewsletter=Mit Newsletter-Anmeldung',
          'name' => 'Shop - Mein Konto',
      ))
      ->setWhereEquals(array(
          'id' => '47',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'vNewsletter=With newsletter registration',
          'name' => 'Shop - My account',
          'description' => '',
      ))
      ->setWhereEquals(array(
          'id' => '47',
      ))
  ;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'view_mapping' => 'empty=Leer
lastUserOrderInSession=Letzte Bestellung
mini=Mini
system=System',
        'name' => 'Shop - Warenkorb',
        'description' => 'Das Shop-Warenkorb-Modul. Dieses Modul muss auf jeder Shop-Seite zumindest einmal vorkommen, um Anfragen wie "Produkt in den Warenkorb legen" verarbeiten zu können.',
    ))
    ->setWhereEquals(array(
        'id' => '43',
    ))
;
TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'empty=Empty
lastUserOrderInSession=Last order
mini=Mini
system=System',
          'name' => 'Shop basket',
          'description' => 'The shop basket module. This module needs to be located at least once on each page to be able to compute requests like "add product to basket".
',
      ))
      ->setWhereEquals(array(
          'id' => '43',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'quickshopping=Quick-Shopping
images=Bilder
productDetails=Produktdetails
productSummaryBox=Produktzusammenfassung
otherCategoriesTeaser=Kategorie-Teaser',
          'name' => 'Shop - Produktdetails',
      ))
      ->setWhereEquals(array(
          'id' => '3fc935e5-66c3-e7ab-378b-99ad2f2b9f1d',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'quickshopping=Quick-shopping
images=Images
productDetails=Product details
productSummaryBox=Product summary
otherCategoriesTeaser=Category teaser',
          'name' => 'Shop - Product details',
          'description' => '',
      ))
      ->setWhereEquals(array(
          'id' => '3fc935e5-66c3-e7ab-378b-99ad2f2b9f1d',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'question=Anfrage',
          'name' => 'Shop - Produktanfrage',
      ))
      ->setWhereEquals(array(
          'id' => '580d1bae-c238-f2c5-409a-440f54703321',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'question=Question',
          'name' => 'Shop - Product question',
      ))
      ->setWhereEquals(array(
          'id' => '580d1bae-c238-f2c5-409a-440f54703321',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'vertical=Vertikal',
          'name' => 'Multimodul',
      ))
      ->setWhereEquals(array(
          'id' => '86a32af4-778e-3a2d-c282-bd5da997eea5',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'vertical=Vertical',
          'name' => 'Multi module',
      ))
      ->setWhereEquals(array(
          'id' => '86a32af4-778e-3a2d-c282-bd5da997eea5',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'introduction=Einleitung
subcategories=Unterkategorien
seotext=SEO-Text',
          'name' => 'Shop - Kategoriedetails',
      ))
      ->setWhereEquals(array(
          'id' => '2cad7001-4da7-b0aa-37c4-ec80fc2c0360',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'introduction=Introduction
subcategories=Sub-categories
seotext=SEO text',
          'name' => 'Shop - Category details',
      ))
      ->setWhereEquals(array(
          'id' => '2cad7001-4da7-b0aa-37c4-ec80fc2c0360',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
      ->setFields(array(
          'view_mapping' => 'introduction=Einleitung',
          'name' => 'Shop - Herstellerdetails',
      ))
      ->setWhereEquals(array(
          'id' => 'c5cd7fef-1a4f-da4d-7593-929e8545ab8c',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

  $data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
      ->setFields(array(
          'view_mapping' => 'introduction=Introduction',
          'name' => 'Shop - Manufacturer details',
      ))
      ->setWhereEquals(array(
          'id' => 'c5cd7fef-1a4f-da4d-7593-929e8545ab8c',
      ))
  ;
  TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Shop - Hersteller',
    ))
    ->setWhereEquals(array(
        'id' => '51',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Manufacturers',
    ))
    ->setWhereEquals(array(
        'id' => '51',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Shop - Produktexport',
    ))
    ->setWhereEquals(array(
        'id' => '57',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Product export',
    ))
    ->setWhereEquals(array(
        'id' => '57',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Der Listenfilter bietet die Möglichkeit, die Produkte einer Kategorie oder die einer Suche anhand diverser Merkmale einzuschränken. Mögliche Einschränkungen sind:
1. Größe
2. Farbe
3. Preise (z.B.: bis 100€, 100-200€ usw)
4. Designer
5. Rabattiert, Neu
6. Lieferstatus
7. Warengruppe
8. Hersteller bzw. Marke
Weitere Filter können integriert werden (Voraussetzung ist, dass die notwendige Information bei den Produktstammdaten hinterlegt ist).
Der Filter zeigt generell nur die Eigenschaften, für die es auch Ergebnisse gibt. Neben jedem Filterattribut wird aufgeführt, wie viele Produkte bei der Auswahl des Filters sichtbar bleiben.
Bei den Attributen sollte festgelegt werden, ob diese mehr als eine Auswahl zulassen (unter Umständen bei Herstellern interessant), oder ob jeweils nur eine Auswahl getroffen werden darf (wie z.B. bei Preis).
Bei Produktkategorien kann angegeben werden, ob der Filter erscheinen soll. Handelt es sich um eine Kategorie die keine weiteren Unterkategorien hat, erscheint der Filter automatisch. Über die Shopkonfiguration lässt sich der Filter für alle Kategorien deaktivieren.
Bei einem Suchergebnis erscheint der Filter immer automatisch neben den Ergebnissen.
',
        'name' => 'Shop - Listenfilter',
    ))
    ->setWhereEquals(array(
        'id' => 'c66d9096-5f2d-fdeb-68a7-fcd97d89e5a3',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'description' => 'The list filter allows the limit the displayed products of a category or a search result based on various properties. Possible limitations are:

1. Size
2. Color
3. Prices (e.g. "up to 100€", "100-200€" etc.)
4. Designer
5. Discounted, new
6. Availability
7. Commodity group
8. Manufacturer/brand

More filters can be implemented (the required information needs to be set in the product data).
The filter generally shows only those properties for which there are results. Next to each attributes the number of products that will remain visible when choosing the filter will be displayed.
For each attribute it should be configured if more than one selection is allowed (possibly interesting for manufacturers).
For product categories it can be defined if the filter should be displayed. For categories without sub-categories the filter will be displayed automatically. In the shop settings the filter can be disabled for all categories.
When displaying search results, the filter is always displayed next to the results.
',
        'name' => 'Shop - List filter',
    ))
    ->setWhereEquals(array(
        'id' => 'c66d9096-5f2d-fdeb-68a7-fcd97d89e5a3',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Shop - Presenter mit Hotspots',
    ))
    ->setWhereEquals(array(
        'id' => '7e61da18-2765-a38e-0e6b-6a7883cc7531',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Presenter with hotspots',
    ))
    ->setWhereEquals(array(
        'id' => '7e61da18-2765-a38e-0e6b-6a7883cc7531',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Anmeldung zum Newsletter.',
        'name' => 'Newsletter-Anmeldung',
    ))
    ->setWhereEquals(array(
        'id' => '7eb3de28-1709-f328-8351-2ad89437b943',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Newsletter signup',
    ))
    ->setWhereEquals(array(
        'id' => '7eb3de28-1709-f328-8351-2ad89437b943',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Abmeldung vom Newsletter.',
        'name' => 'Newsletter-Abmeldung',
    ))
    ->setWhereEquals(array(
        'id' => '2794bd2f-ac3f-ca11-59bb-4ab2302d3897',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Newsletter signout',
    ))
    ->setWhereEquals(array(
        'id' => '2794bd2f-ac3f-ca11-59bb-4ab2302d3897',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Snippet-Galerie',
    ))
    ->setWhereEquals(array(
        'id' => '731f713e-f20c-1247-9b80-6051b71988b0',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Snippet gallery',
    ))
    ->setWhereEquals(array(
        'id' => '731f713e-f20c-1247-9b80-6051b71988b0',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Modul zum Anzeigen und Erstellen von Produktbewertungen.',
        'name' => 'Shop - Produktbewertung',
    ))
    ->setWhereEquals(array(
        'id' => '718df394-5213-ab12-a768-a590b68c9bcb',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Product review',
    ))
    ->setWhereEquals(array(
        'id' => '718df394-5213-ab12-a768-a590b68c9bcb',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Shop - Bestellhistorie',
    ))
    ->setWhereEquals(array(
        'id' => '8f21cf4b-bbc7-8d4b-8c3f-46db1cd0d1eb',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Order history',
    ))
    ->setWhereEquals(array(
        'id' => '8f21cf4b-bbc7-8d4b-8c3f-46db1cd0d1eb',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'description' => 'Kann auf der Produktdetailseite zum nächsten oder vorherigen Produkt in der aktuellen Liste blättern.',
        'name' => 'Shop - Blättern auf Produktdetailseite',
    ))
    ->setWhereEquals(array(
        'id' => '81e7cd70-292e-583e-3907-4c7b6608935b',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'description' => 'Allows to browse to the next or previous product on the product detail page.',
        'name' => 'Shop - Browse on product detail page',
    ))
    ->setWhereEquals(array(
        'id' => '81e7cd70-292e-583e-3907-4c7b6608935b',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Shop - Footer-Kategorieliste',
    ))
    ->setWhereEquals(array(
        'id' => '51cb46d1-f845-81ee-5eb0-089b7709830e',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Footer category list',
    ))
    ->setWhereEquals(array(
        'id' => '51cb46d1-f845-81ee-5eb0-089b7709830e',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'de')
    ->setFields(array(
        'name' => 'Shop - Produktliste',
    ))
    ->setWhereEquals(array(
        'id' => '48470496-9ae0-5104-217d-e4532dc64e3b',
    ))
;
TCMSLogChange::update(__LINE__, $data);

$data = TCMSLogChange::createMigrationQueryData('cms_tpl_module', 'en')
    ->setFields(array(
        'name' => 'Shop - Product list',
    ))
    ->setWhereEquals(array(
        'id' => '48470496-9ae0-5104-217d-e4532dc64e3b',
    ))
;
TCMSLogChange::update(__LINE__, $data);
