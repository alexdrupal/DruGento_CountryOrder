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
 * Application admin controller
 *
 * @category    DruGento
 * @package     DruGento_CountryOrder
 * @author      Alexander Yurchik alexweb@gmail.com
 */
class DruGento_CountryOrder_Adminhtml_CountryorderController extends Mage_Adminhtml_Controller_Action
{
    /**
     * default action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->_title(Mage::helper('drugento_contactuscustomers')->__('Countries'));
        $this->renderLayout();
    }

    /**
     * save application - action
     *
     * @access public
     * @return void
     * @author Ultimate Module Creator
     */
    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost('country_ordered')) {
            parse_str($data, $countries);
            if (!is_array($countries['country-list'])) {
                Mage::getSingleton('adminhtml/session')->addError(
                    Mage::helper('drugento_countryorder')->__('Not found data to save')
                );
                return $this->_redirect('*/*/');
            }
            $order = 0;
            foreach ($countries['country-list'] as $country) {
                $countryModel = Mage::getModel('directory/country')->load($country);
                if (!$countryModel->getId()) {
                    Mage::getSingleton('adminhtml/session')->addError(
                        Mage::helper('drugento_countryorder')->__('Not found country for code %s', $country)
                    );
                    $this->_redirect('*/*/');
                }
                $countryModel->setSortOrder($order);
                $countryModel->save();
                $order++;
            }
            Mage::getSingleton('adminhtml/session')->addSuccess(
                Mage::helper('drugento_countryorder')->__('Countries were reordered successfully.')
            );
            return $this->_redirect('*/*/');
        }
        Mage::getSingleton('adminhtml/session')->addError(
            Mage::helper('drugento_countryorder')->__('Not found data to save')
        );
        $this->_redirect('*/*/');
    }

    /**
     * Check if admin has permissions to visit related pages
     *
     * @access protected
     * @return boolean
     * @author Ultimate Module Creator
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('drugento_countryorder/country');
    }
}
