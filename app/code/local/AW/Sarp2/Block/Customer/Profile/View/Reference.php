<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Sarp2
 * @version    2.2.3
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */

class AW_Sarp2_Block_Customer_Profile_View_Reference extends Mage_Core_Block_Template
{
    public function getInfoBoxTitle()
    {
        return $this->__('Reference');
    }

    public function getInfoBoxFields()
    {
        $profile = $this->getProfile();
        $paymentModel = Mage::helper('payment')->getMethodInstance($profile->getData('details/method_code'));
        $engineModel = $profile->getSubscriptionEngineModel();
        $fields = array(
            array(
                'title' => $this->__('Payment Method:'),
                'value' => (!$paymentModel ? 'not available' : $paymentModel->getTitle()),
            ),
            array(
                'title' => $this->__('Payment Reference ID:'),
                'value' => $profile->getData('reference_id'),
            ),
            array(
                'title' => $this->__('Schedule Description:'),
                'value' => $profile->getData('details/description'),
            ),
            array(
                'title' => $this->__('Profile State:'),
                'value' => $engineModel->getStatusSource()->getStatusLabel($profile->getData('status')),
            ),
        );
        return $fields;
    }

    /**
     * @return AW_Sarp2_Model_Profile
     */
    public function getProfile()
    {
        return Mage::registry('current_profile');
    }
}