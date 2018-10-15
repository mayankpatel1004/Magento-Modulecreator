<?php
class Sankhalainfo_B2bsales_Block_B2bsales extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getB2bsales()     
     { 
        if (!$this->hasData('b2bsales')) {
            $this->setData('b2bsales', Mage::registry('b2bsales'));
        }
        return $this->getData('b2bsales');
        
    }
}