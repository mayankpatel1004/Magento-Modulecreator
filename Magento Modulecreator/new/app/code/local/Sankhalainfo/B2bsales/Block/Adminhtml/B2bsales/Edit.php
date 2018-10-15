<?php

class Sankhalainfo_B2bsales_Block_Adminhtml_B2bsales_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'b2bsales';
        $this->_controller = 'adminhtml_b2bsales';
        
        $this->_updateButton('save', 'label', Mage::helper('b2bsales')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('b2bsales')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('b2bsales_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'b2bsales_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'b2bsales_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('b2bsales_data') && Mage::registry('b2bsales_data')->getId() ) {
            return Mage::helper('b2bsales')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('b2bsales_data')->getTitle()));
        } else {
            return Mage::helper('b2bsales')->__('Add Item');
        }
    }
}