<?php

class Sankhalainfo_B2bsales_Block_Adminhtml_B2bsales_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('b2bsales_form', array('legend'=>Mage::helper('b2bsales')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('b2bsales')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('b2bsales')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('b2bsales')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('b2bsales')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('b2bsales')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('b2bsales')->__('Content'),
          'title'     => Mage::helper('b2bsales')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getB2bsalesData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getB2bsalesData());
          Mage::getSingleton('adminhtml/session')->setB2bsalesData(null);
      } elseif ( Mage::registry('b2bsales_data') ) {
          $form->setValues(Mage::registry('b2bsales_data')->getData());
      }
      return parent::_prepareForm();
  }
}