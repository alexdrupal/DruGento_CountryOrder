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
 * Country order block
 *
 * @category    DruGento
 * @package     DruGento_CountryOrder
 * @author      Alexander Yurchik alexweb@gmail.com
 */
class Drugento_CountryOrder_Block_Adminhtml_Countryorder extends Mage_Adminhtml_Block_Widget
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('drugento_countryorder/list.phtml');
    }

    public function getHeader()
    {
        return $this->__('Countries');
    }

    public function getSaveUrl()
    {
        return $this->getUrl('*/*/save');
    }

    public function getCountries()
    {
        return Mage::getModel('directory/country')->getCollection();
    }

    public function getSaveButtonHtml()
    {
        return $this->getChildHtml('save_button');
    }

    protected function _prepareLayout()
    {
            $this->setChild('save_button',
                $this->getLayout()->createBlock('adminhtml/widget_button')
                    ->setData(array(
                        'label'     => Mage::helper('drugento_countryorder')->__('Save'),
                        'onclick'   => 'saveOrder()',
                        'class' => 'save'
                    ))
            );
        return parent::_prepareLayout();
    }
}
