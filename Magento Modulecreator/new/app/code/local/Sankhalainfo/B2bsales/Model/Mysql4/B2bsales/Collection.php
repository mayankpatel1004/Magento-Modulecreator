<?php

class Sankhalainfo_B2bsales_Model_Mysql4_B2bsales_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('b2bsales/b2bsales');
    }
}