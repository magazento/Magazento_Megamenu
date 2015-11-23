<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php


class Magazento_Megamenu_Block_Admin_Category_Grid_Renderer_Action extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Action
{
	    public function render(Varien_Object $row)
	    {
	
	        $actions[] = array(
	        	'url' => $this->getUrl('*/*/edit', array('category_id' => $row->getId())),
	        	'caption' => Mage::helper('megamenu')->__('Edit')
	         );
		     
	         $actions[] = array(
	        	'url' => $this->getUrl('*/*/delete', array('category_id' => $row->getId())),
	        	'caption' => Mage::helper('megamenu')->__('Delete'),
	        	'confirm' => Mage::helper('megamenu')->__('Are you sure you want to delete this category ?')
	         );
	
	        $this->getColumn()->setActions($actions);
	
	        return parent::render($row);
	    }
}
