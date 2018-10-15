<?php
class Sankhalainfo_Event_Block_Event extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getEvent()     
     { 
        if (!$this->hasData('event')) {
            $this->setData('event', Mage::registry('event'));
        }
        return $this->getData('event');
        
    }
}