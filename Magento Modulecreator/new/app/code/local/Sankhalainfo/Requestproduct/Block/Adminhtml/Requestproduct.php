<?php
class Sankhalainfo_Requestproduct_Block_Adminhtml_Requestproduct extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_requestproduct';
    $this->_blockGroup = 'requestproduct';
    $this->_headerText = Mage::helper('requestproduct')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('requestproduct')->__('Add Item');
    parent::__construct();
  }
}