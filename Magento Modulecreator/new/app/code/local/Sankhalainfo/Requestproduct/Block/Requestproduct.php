<?php
class Sankhalainfo_Requestproduct_Block_Requestproduct extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getRequestproduct()     
     { 
        if (!$this->hasData('requestproduct')) {
            $this->setData('requestproduct', Mage::registry('requestproduct'));
        }
        return $this->getData('requestproduct');
        
    }
}