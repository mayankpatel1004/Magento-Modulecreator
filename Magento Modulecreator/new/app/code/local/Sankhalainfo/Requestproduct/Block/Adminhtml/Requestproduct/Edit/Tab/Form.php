<?php

class Sankhalainfo_Requestproduct_Block_Adminhtml_Requestproduct_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('requestproduct_form', array('legend'=>Mage::helper('requestproduct')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('requestproduct')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('requestproduct')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('requestproduct')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('requestproduct')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('requestproduct')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('requestproduct')->__('Content'),
          'title'     => Mage::helper('requestproduct')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getRequestproductData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getRequestproductData());
          Mage::getSingleton('adminhtml/session')->setRequestproductData(null);
      } elseif ( Mage::registry('requestproduct_data') ) {
          $form->setValues(Mage::registry('requestproduct_data')->getData());
      }
      return parent::_prepareForm();
  }
}