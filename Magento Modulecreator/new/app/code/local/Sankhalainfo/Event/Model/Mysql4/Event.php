<?php

class Sankhalainfo_Event_Model_Mysql4_Event extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the event_id refers to the key field in your database table.
        $this->_init('event/event', 'event_id');
    }
}