<?php

class Wage_Responsivebannerslider_Model_Resource_Responsivebannerslider_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('responsivebannerslider/responsivebannerslider');
    }
}