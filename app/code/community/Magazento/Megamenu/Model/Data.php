<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
Class Magazento_Megamenu_Model_Data {
    protected function getCatalogModel() {
        return Mage::getModel('megamenu/category');
    }
    protected function getCatalogCollection() {
        $storeId = Mage::app()->getStore()->getId();
        $collection = $this->getCatalogModel()->getCollection();
        $collection->addFilter('is_active', 1);
        $collection->addStoreFilter($storeId);
        $collection->addOrder('position', 'ASC');
        return $collection;
    }
    public function getCatalog() {
        return $this->getCatalogCollection();
    }
    protected function getItemModel() {
        return Mage::getModel('megamenu/item');
    }
    protected function getItemCollection() {
        $storeId = Mage::app()->getStore()->getId();
        $collection = $this->getItemModel()->getCollection();
        $collection->addFilter('is_active', 1);
        $collection->addStoreFilter($storeId);
        $collection->addOrder('position', 'ASC');
        return $collection;
    }
    public function getItems() {
        return $this->getItemCollection();
    }
}
?>