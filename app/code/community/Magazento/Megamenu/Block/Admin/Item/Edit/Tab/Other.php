<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Magazento_Megamenu_Block_Admin_Item_Edit_Tab_Other extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $model = Mage::registry('megamenu_item');
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('additional_form', array('legend'=>Mage::helper('megamenu')->__('Additional information ')));



        $fieldset->addField('samplefield', 'text', array(
            'name' => 'samplefield',
            'label' => Mage::helper('megamenu')->__('Samplefield'),
            'title' => Mage::helper('megamenu')->__('Samplefield'),
            'required' => false,
        ));

//        $form->setUseContainer(true);
        $form->setValues($model->getData());
        $this->setForm($form);

      return parent::_prepareForm();
  }
}