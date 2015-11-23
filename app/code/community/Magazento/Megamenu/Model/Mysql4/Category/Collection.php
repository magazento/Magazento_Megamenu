<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Megamenu_Model_Mysql4_Category_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    protected function _construct() {
        $this->_init('megamenu/category');
    }

    public function toOptionArray() {
        return $this->_toOptionArray('category_id', 'name');
    }
    
    public function addStoreFilter($store, $withAdmin = true) {
        if ($store instanceof Mage_Core_Model_Store) {
            $store = array($store->getId());
        }

        $this->getSelect()->join(
                        array('category_store' => $this->getTable('megamenu/category_store')),
                        'main_table.category_id = category_store.category_id',
                        array()
                )
                ->where('category_store.store_id in (?)', ($withAdmin ? array(0, $store) : $store));

        return $this;
    }
    public function addNowFilter() {
        $now = Mage::getSingleton('core/date')->gmtDate();
        $where = "from_time < '" . $now . "' AND ((to_time > '" . $now . "') OR (to_time IS NULL))";
        $this->getSelect()->where($where);
    }

}