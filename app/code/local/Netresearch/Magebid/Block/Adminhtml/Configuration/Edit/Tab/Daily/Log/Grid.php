<?php

class Netresearch_Magebid_Block_Adminhtml_Configuration_Edit_Tab_Daily_Log_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
     public function __construct()
    {
        parent::__construct();
        $this->setId('configuration_daily_log_grid');
        $this->setUseAjax(true);
        $this->setDefaultSort('day');
        $this->setDefaultDir('desc');	       
    }

    protected function _prepareCollection()
    {
        $model = Mage::getModel('magebid/daily_log');
        $collection = $model->getCollection();	
		$this->setCollection($collection);
        return parent::_prepareCollection();
    }
	
	

    protected function _prepareColumns()
    {
        $this->addColumn('day', array(
            'header'        => Mage::helper('magebid')->__('Day'),
            'filter_index'  => 'day',
            'index'         => 'day',
        ));

        $this->addColumn('count', array(
            'header'        => Mage::helper('magebid')->__('Count'),
            'index'         => 'count',
			'filter_index'  => 'count',
        ));					

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
       return false;
    }
	
    public function getGridUrl()
    {
        return $this->getUrl('*/*/dailyLog', array('_current' => true));
    }		
}
?>