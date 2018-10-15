<?php

class Sankhalainfo_Event_Model_Event extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('event/event');
    }
}