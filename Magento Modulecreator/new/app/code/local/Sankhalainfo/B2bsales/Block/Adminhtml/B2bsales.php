<?php
class Sankhalainfo_B2bsales_Block_Adminhtml_B2bsales extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_b2bsales';
    $this->_blockGroup = 'b2bsales';
    $this->_headerText = Mage::helper('b2bsales')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('b2bsales')->__('Add Item');
    parent::__construct();
  }
}