<?php

class Sankhalainfo_B2bsales_Block_Adminhtml_B2bsales_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('b2bsales_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('b2bsales')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('b2bsales')->__('Item Information'),
          'title'     => Mage::helper('b2bsales')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('b2bsales/adminhtml_b2bsales_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}