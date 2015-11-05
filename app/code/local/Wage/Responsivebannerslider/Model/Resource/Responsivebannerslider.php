<?php

class Wage_Responsivebannerslider_Model_Resource_Responsivebannerslider extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {    
        $this->_init('responsivebannerslider/responsivebannerslider', 'id');
    }
}