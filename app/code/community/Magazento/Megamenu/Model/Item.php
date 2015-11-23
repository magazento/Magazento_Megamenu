<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Magazento_Megamenu_Model_Item extends Mage_Core_Model_Abstract
{
    const CACHE_TAG     = 'megamenu_admin_item';
    protected $_cacheTag= 'megamenu_admin_item';

    protected function _construct()
    {
        $this->_init('megamenu/item');


    }

}
