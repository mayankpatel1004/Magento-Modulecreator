<?php
class Sankhalainfo_Event_Block_Adminhtml_Event extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_event';
    $this->_blockGroup = 'event';
    $this->_headerText = Mage::helper('event')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('event')->__('Add Item');
    parent::__construct();
  }
}