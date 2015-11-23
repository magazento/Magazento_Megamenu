<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Megamenu_Model_Source_Align {

    public function toOptionArray() {
        return array(
            array('value' => 'left', 'label' => Mage::helper('megamenu')->__('Left')),
            array('value' => 'right','label' => Mage::helper('megamenu')->__('Right')),

        );
    }

}