<?php

class Wage_Responsivebannerslider_Model_Mysql4_Responsivebannerslider_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('responsivebannerslider/responsivebannerslider');
    }
}