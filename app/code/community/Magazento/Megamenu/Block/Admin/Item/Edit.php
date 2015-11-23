<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Megamenu_Block_Admin_Item_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    public function __construct()
    {
    	$this->_objectId = 'item_id';
        $this->_controller = 'admin_item';
        $this->_blockGroup = 'megamenu';

        parent::__construct();

        $this->_updateButton('save', 'label', Mage::helper('megamenu')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('megamenu')->__('Delete Item'));
        
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);
        

        $this->_formScripts[] = "
           function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
                }
            }
            
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
            
        ";
    }

    public function getHeaderText()
    {
        if (Mage::registry('megamenu_item')->getId()) {
            return Mage::helper('megamenu')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('megamenu_item')->getTitle()));
        }
        else {
            return Mage::helper('megamenu')->__('New Item');
        }
    }

}
