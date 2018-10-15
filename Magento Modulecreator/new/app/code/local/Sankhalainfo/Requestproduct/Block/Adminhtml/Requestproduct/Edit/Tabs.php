<?php

class Sankhalainfo_Requestproduct_Block_Adminhtml_Requestproduct_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('requestproduct_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('requestproduct')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('requestproduct')->__('Item Information'),
          'title'     => Mage::helper('requestproduct')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('requestproduct/adminhtml_requestproduct_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}