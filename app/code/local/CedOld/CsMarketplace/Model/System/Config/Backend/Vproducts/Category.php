<?php 

/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Ced;
 * @package     Ced_CsMarketplace
 * @author 		CedCommerce Core Team <coreteam@cedcommerce.com>
 * @copyright   Copyright CedCommerce (http://cedcommerce.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
/**
 * Backend for serialized array data
 *
 */
class Ced_CsMarketplace_Model_System_Config_Backend_Vproducts_Category extends Mage_Core_Model_Config_Data
{
    public function save(){
    	if($value=$this->getValue())
    		$value=implode(',',array_unique(explode(',',$this->getValue())));
    	$this->setValue($value);
    	return parent::save();
    }
}