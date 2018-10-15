<?php

class Sankhalainfo_Event_Block_Adminhtml_Event_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('event_form', array('legend'=>Mage::helper('event')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('event')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('event')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('event')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('event')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('event')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('event')->__('Content'),
          'title'     => Mage::helper('event')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getEventData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getEventData());
          Mage::getSingleton('adminhtml/session')->setEventData(null);
      } elseif ( Mage::registry('event_data') ) {
          $form->setValues(Mage::registry('event_data')->getData());
      }
      return parent::_prepareForm();
  }
}