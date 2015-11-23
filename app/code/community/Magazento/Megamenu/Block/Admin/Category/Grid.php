<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Megamenu_Block_Admin_Category_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct() {
        parent::__construct();
        $this->setId('MegamenuGrid');
        $this->setDefaultSort('position');
        $this->setDefaultDir('ASC');
    }

    protected function _prepareCollection() {
        $collection = Mage::getModel('megamenu/category')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {

        $baseUrl = $this->getUrl();
        $this->addColumn('category_id', array(
            'header' => Mage::helper('megamenu')->__('ID'),
            'align' => 'left',
            'width' => '30px',
            'index' => 'category_id',
        ));
        $this->addColumn('catalog_id', array(
            'header' => Mage::helper('megamenu')->__('Catalog ID'),
            'align' => 'left',
            'width' => '30px',
            'index' => 'catalog_id',
        ));
        $this->addColumn('title', array(
            'header' => Mage::helper('megamenu')->__('Title'),
            'align' => 'left',
            'index' => 'title',
        ));
        $this->addColumn('column', array(
            'header' => Mage::helper('megamenu')->__('Columns'),
            'align' => 'left',
            'index' => 'column',
            'width' => '30px',
        ));
        $this->addColumn('position', array(
            'header' => Mage::helper('megamenu')->__('Position'),
            'align' => 'left',
            'index' => 'position',
            'width' => '30px',
        ));
        $this->addColumn('url', array(
            'header' => Mage::helper('megamenu')->__('Url'),
            'align' => 'left',
            'index' => 'url',
            'width' => '30px',
        ));

        if (!Mage::app()->isSingleStoreMode()) {
            $this->addColumn('store_id', array(
                'header'        => Mage::helper('megamenu')->__('Store View'),
                'index'         => 'store_id',
                'type'          => 'store',
                'store_all'     => true,
                'store_view'    => true,
                'sortable'      => false,
                'filter_condition_callback'
                                => array($this, '_filterStoreCondition'),
            ));
        }
        $this->addColumn('align_category', array(
            'header' => Mage::helper('megamenu')->__('Align category'),
            'align' => 'left',
            'index' => 'align_category',
            'width' => '30px',
            'type'  => 'options',
            'options' => array(
                'left' => Mage::helper('megamenu')->__('Left'),
                'right' => Mage::helper('megamenu')->__('Right'),
            )

            ));
        $this->addColumn('align_content', array(
            'header' => Mage::helper('megamenu')->__('Align content'),
            'align' => 'left',
            'index' => 'align_content',
            'width' => '30px',
            'type'  => 'options',
            'options' => array(
                'left' => Mage::helper('megamenu')->__('Left'),
                'right' => Mage::helper('megamenu')->__('Right'),
            )
        ));
        $this->addColumn('is_active', array(
            'header' => Mage::helper('megamenu')->__('Status'),
            'index' => 'is_active',
            'type' => 'options',
            'options' => array(
                0 => Mage::helper('megamenu')->__('Disabled'),
                1 => Mage::helper('megamenu')->__('Enabled'),
            ),
        ));

        $this->addColumn('from_time', array(
            'header' => Mage::helper('megamenu')->__('From Time'),
            'index' => 'from_time',
            'type' => 'datetime',
        ));

        $this->addColumn('to_time', array(
            'header' => Mage::helper('megamenu')->__('To Time'),
            'index' => 'to_time',
            'type' => 'datetime',
        ));

        $this->addColumn('action',
                array(
                    'header' => Mage::helper('megamenu')->__('Action'),
                    'index' => 'category_id',
                    'sortable' => false,
                    'filter' => false,
                    'no_link' => true,
                    'width' => '100px',
                    'renderer' => 'megamenu/admin_category_grid_renderer_action'
        ));
        $this->addExportType('*/*/exportCsv', Mage::helper('megamenu')->__('CSV'));
        $this->addExportType('*/*/exportXml', Mage::helper('megamenu')->__('XML'));
        return parent::_prepareColumns();
    }

    protected function _afterLoadCollection() {
        $this->getCollection()->walk('afterLoad');
        parent::_afterLoadCollection();
    }

    protected function _filterStoreCondition($collection, $column) {
        if (!$value = $column->getFilter()->getValue()) {
            return;
        }
        $this->getCollection()->addStoreFilter($value);
    }

    protected function _prepareMassaction() {
        $this->setMassactionIdField('category_id');
        $this->getMassactionBlock()->setFormFieldName('massaction');
        $this->getMassactionBlock()->addItem('delete', array(
            'label' => Mage::helper('megamenu')->__('Delete'),
            'url' => $this->getUrl('*/*/massDelete'),
            'confirm' => Mage::helper('megamenu')->__('Are you sure?')
        ));

//        array_unshift($statuses, array('label' => '', 'value' => ''));
        $this->getMassactionBlock()->addItem('status', array(
            'label' => Mage::helper('megamenu')->__('Change status'),
            'url' => $this->getUrl('*/*/massStatus', array('_current' => true)),
            'additional' => array(
                'visibility' => array(
                    'name' => 'status',
                    'type' => 'select',
                    'class' => 'required-entry',
                    'label' => Mage::helper('megamenu')->__('Status'),
                    'values' => array(
                        0 => Mage::helper('megamenu')->__('Disabled'),
                        1 => Mage::helper('megamenu')->__('Enabled'),
                    ),
                )
            )
        ));
        return $this;
    }

    public function getRowUrl($row) {
        return $this->getUrl('*/*/edit', array('category_id' => $row->getId()));
    }

}
