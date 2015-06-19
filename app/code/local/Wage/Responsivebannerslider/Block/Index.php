<?php   
class Wage_Responsivebannerslider_Block_Index extends Mage_Core_Block_Template
{   

    public function getResponsivebannersliderEnabled()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/enable',Mage::app()->getStore());
    }

    public function getResponsivebannersliderSpeed()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/slidespeed',Mage::app()->getStore());
    }

    public function getResponsivebannerJqueryEnable()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/jqueryenable',Mage::app()->getStore());
    }

    public function getResponsivebannerBannerLoop()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/bannerloop',Mage::app()->getStore());
    }

    public function getResponsivebannerPauseOnhover()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/pauseonhover',Mage::app()->getStore());
    }

    public function getResponsivebannerDescription()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/description',Mage::app()->getStore());
    }

    public function getResponsivebannerPagination()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/pagination',Mage::app()->getStore());
    }

    public function getResponsivebannerControls()
    {
        return Mage::getStoreConfig('generalsetting/wageresponsivegroup/controls',Mage::app()->getStore());
    }


}
