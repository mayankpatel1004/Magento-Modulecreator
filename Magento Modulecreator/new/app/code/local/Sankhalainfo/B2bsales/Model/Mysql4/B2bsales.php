<?php

class Sankhalainfo_B2bsales_Model_Mysql4_B2bsales extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the b2bsales_id refers to the key field in your database table.
        $this->_init('b2bsales/b2bsales', 'b2bsales_id');
    }
}