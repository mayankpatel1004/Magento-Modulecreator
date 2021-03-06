<?php

class Sankhalainfo_Event_Block_Adminhtml_Event_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'event';
        $this->_controller = 'adminhtml_event';
        
        $this->_updateButton('save', 'label', Mage::helper('event')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('event')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('event_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'event_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'event_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('event_data') && Mage::registry('event_data')->getId() ) {
            return Mage::helper('event')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('event_data')->getTitle()));
        } else {
            return Mage::helper('event')->__('Add Item');
        }
    }
}