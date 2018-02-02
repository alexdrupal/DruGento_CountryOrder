<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$installer->getConnection()
->addColumn($installer->getTable('directory/country'),'sort_order', array(
    'type'      => Varien_Db_Ddl_Table::TYPE_INTEGER,
    'nullable'  => true,
    'comment'   => 'Country Order'
    ));
// Move selected countries to the top of the list (add as many entries as you need)
$installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 0 WHERE `country_id` = 'US'");
$installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 1 WHERE `country_id` = 'GB'");
$installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 2 WHERE `country_id` = 'GE'");
$installer->run("UPDATE {$installer->getTable('directory/country')} SET `sort_order` = 3 WHERE `country_id` = 'FR'");
$installer->endSetup();

