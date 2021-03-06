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
 
class Ced_CsMarketplace_Block_Adminhtml_Vorders_Grid_Renderer_Vendorname extends            Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
      {
 
        public function render(Varien_Object $row)
        {
          if($row->getVendorId()!=''){
		  
			$vendor = Mage::getModel('csmarketplace/vendor')->load($row->getVendorId());
		
			
			 
			  
			  $url =  Mage::helper("adminhtml")->getUrl("adminhtml/customer/edit/", array('id' => $vendor->getCustomerId()));

			  return "<a href='". $url . "' target='_blank' >".$vendor->getName()."</a>";
		  
		  }
            
	   else 
    		 return 'ff';

       }
 
}