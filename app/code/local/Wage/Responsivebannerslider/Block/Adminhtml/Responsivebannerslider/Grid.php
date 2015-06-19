<?php

class Wage_Responsivebannerslider_Block_Adminhtml_Responsivebannerslider_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
    {
        parent::__construct();
        $this->setId("responsivebannersliderGrid");
        $this->setDefaultSort("id");
        $this->setDefaultDir("DESC");
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel("responsivebannerslider/responsivebannerslider")->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }
    protected function _prepareColumns()
    {
        $this->addColumn("id", array(
        "header" => Mage::helper("responsivebannerslider")->__("ID"),
        "align" =>"right",
        "width" => "50px",
          "type" => "number",
        "index" => "id",
        ));
                
        $this->addColumn("title", array(
        "header" => Mage::helper("responsivebannerslider")->__("Title"),
        "index" => "title",
        ));
        $this->addColumn("url", array(
        "header" => Mage::helper("responsivebannerslider")->__("URL"),
        "index" => "url",
        ));
        $this->addColumn("clicks", array(
        "header" => Mage::helper("responsivebannerslider")->__("Clicks"),
        "index" => "clicks",
        ));
        $this->addColumn("imageorder", array(
        "header" => Mage::helper("responsivebannerslider")->__("Images Order"),
        "index" => "imageorder",
        ));

        $this->addColumn('status', array(
        'header' => Mage::helper('responsivebannerslider')->__('Status'),
        'index' => 'status',
        'type' => 'options',
        'options'   => array(
              1 => 'Enabled',
              0 => 'Disabled',
          ),      
        ));
            
      $this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
      $this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
         return $this->getUrl("*/*/edit", array("id" => $row->getId()));
    }


    
    protected function _prepareMassaction()
    {
      $this->setMassactionIdField('id');
      $this->getMassactionBlock()->setFormFieldName('ids');
      $this->getMassactionBlock()->setUseSelectAll(true);
      $this->getMassactionBlock()->addItem('remove_responsivebannerslider', array(
           'label'=> Mage::helper('responsivebannerslider')->__('Remove Responsivebannerslider'),
           'url'  => $this->getUrl('*/adminhtml_responsivebannerslider/massRemove'),
           'confirm' => Mage::helper('responsivebannerslider')->__('Are you sure?')
        ));

      $statuses = Mage::getModel('responsivebannerslider/status')->getOptionArray();
      $this->getMassactionBlock()->addItem('status', array(
           'label'=> Mage::helper('responsivebannerslider')->__('Change status'),
           'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
           'additional' => array(
                  'visibility' => array(
                       'name' => 'status',
                       'type' => 'select',
                       'class' => 'required-entry',
                       'label' => Mage::helper('responsivebannerslider')->__('Status'),
                       'values' => $statuses
                   )
           )
      ));
        
      return $this;
    }

}