<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
if (FALSE !== strpos($_SERVER['SERVER_NAME'], 'ensembleshops.ru')) {
    // Move selected countries to the top of the list
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 0 WHERE `country_id` = 'RU'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 1 WHERE `country_id` = 'EE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 2 WHERE `country_id` = 'LT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 3 WHERE `country_id` = 'LV'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 4 WHERE `country_id` = 'BY'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 5 WHERE `country_id` = 'UA'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 6 WHERE `country_id` = 'KZ'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 7 WHERE `country_id` = 'AT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 8 WHERE `country_id` = 'BE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 9 WHERE `country_id` = 'BG'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 10 WHERE `country_id` = 'GB'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 11 WHERE `country_id` = 'HU'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 12 WHERE `country_id` = 'DE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 13 WHERE `country_id` = 'GR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 14 WHERE `country_id` = 'DK'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 15 WHERE `country_id` = 'IN'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 16 WHERE `country_id` = 'IE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 17 WHERE `country_id` = 'ES'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 18 WHERE `country_id` = 'IT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 19 WHERE `country_id` = 'CY'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 20 WHERE `country_id` = 'CN'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 21 WHERE `country_id` = 'LU'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 22 WHERE `country_id` = 'MT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 23 WHERE `country_id` = 'NL'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 24 WHERE `country_id` = 'PL'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 25 WHERE `country_id` = 'PT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 26 WHERE `country_id` = 'RO'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 27 WHERE `country_id` = 'SK'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 28 WHERE `country_id` = 'SI'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 29 WHERE `country_id` = 'TR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 30 WHERE `country_id` = 'FI'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 31 WHERE `country_id` = 'FR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 32 WHERE `country_id` = 'CZ'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 33 WHERE `country_id` = 'SE'");
}
if (FALSE !== strpos($_SERVER['SERVER_NAME'], 'fr.ensembleshops.ru') || FALSE !== strpos($_SERVER['SERVER_NAME'], 'ensembleshops.com')) {
    // Move selected countries to the top of the list
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 0 WHERE `country_id` = 'FR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 1 WHERE `country_id` = 'EE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 2 WHERE `country_id` = 'LT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 3 WHERE `country_id` = 'LV'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 4 WHERE `country_id` = 'RU'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 5 WHERE `country_id` = 'BY'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 6 WHERE `country_id` = 'UA'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 7 WHERE `country_id` = 'KZ'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 8 WHERE `country_id` = 'AT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 9 WHERE `country_id` = 'BE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 10 WHERE `country_id` = 'BG'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 11 WHERE `country_id` = 'GB'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 12 WHERE `country_id` = 'HU'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 13 WHERE `country_id` = 'DE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 14 WHERE `country_id` = 'GR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 15 WHERE `country_id` = 'DK'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 16 WHERE `country_id` = 'IN'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 17 WHERE `country_id` = 'IE'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 18 WHERE `country_id` = 'ES'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 19 WHERE `country_id` = 'IT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 20 WHERE `country_id` = 'CY'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 21 WHERE `country_id` = 'CN'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 22 WHERE `country_id` = 'LU'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 23 WHERE `country_id` = 'MT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 24 WHERE `country_id` = 'NL'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 25 WHERE `country_id` = 'PL'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 26 WHERE `country_id` = 'PT'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 27 WHERE `country_id` = 'RO'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 28 WHERE `country_id` = 'SK'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 29 WHERE `country_id` = 'SI'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 30 WHERE `country_id` = 'TR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 31 WHERE `country_id` = 'FI'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 32 WHERE `country_id` = 'FR'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 33 WHERE `country_id` = 'CZ'");
    $installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 34 WHERE `country_id` = 'SE'");
}

$installer->endSetup();

