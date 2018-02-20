<?php
/**
 * DruGento_CountryOrder extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       DruGento
 * @package        DruGento_CountryOrder
 * @copyright      Copyright (c) 2018
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Override for country collection
 *
 * @category    DruGento
 * @package     DruGento_CountryOrder
 * @author      Alexander Yurchik alexweb@gmail.com
 */
class DruGento_CountryOrder_Model_Resource_Country_Collection extends Mage_Directory_Model_Resource_Country_Collection {
    
    protected function _beforeLoad()
    {
        parent::_beforeLoad();
        // Custom order with - flag used to force mysql to output records with sort_order first
        // Example: 0,1,3,4, null, null, null
        // While default behavior is null, null, null, 0,1,3,4
        // see this link fo further explanation - http://stackoverflow.com/a/8174026/2042777
        $this->addOrder('-sort_order', self::SORT_ORDER_DESC);
        return $this;
    }
    
    /**
     * Convert collection items to select options array
     *
     * @param string $emptyLabel
     * @return array
     */
    public function toOptionArray($emptyLabel = ' ')
    {
        $options = $this->_toOptionArray('country_id', 'name', array('title'=>'iso2_code', 'sort_order' => 'sort_order'));
                
        $sort = array();
        $databaseSorted = array();
        foreach ($options as $data) {
            $name = Mage::app()->getLocale()->getCountryTranslation($data['value']);
            if (!empty($name)) {
                $sort[$name] = $data['value'];
            }
            if(is_numeric($data['sort_order'])) {
                $databaseSorted[$name] = $data['value'];
                unset($sort[$name]);
            }
        }
        Mage::helper('core/string')->ksortMultibyte($sort);
        $options = array();
        foreach ($databaseSorted as $label=>$value) {
            $options[] = array(
               'value' => $value,
               'label' => $label
            );
        }
        if (!empty($databaseSorted)) {
            $options[] = array('value' => '', 'label' => $emptyLabel);
        }
        foreach ($sort as $label=>$value) {
            $options[] = array(
               'value' => $value,
               'label' => $label
            );
        }

        if (count($options) > 0 && $emptyLabel !== false) {
            array_unshift($options, array('value' => '', 'label' => $emptyLabel));
        }

        return $options;
    }
}
