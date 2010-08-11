<?php
class Netresearch_Magebid_Block_Adminhtml_Auction_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();		
        $this->setId('magebid_auction_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('magebid')->__('Auction'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab('auction', array(
            'label'     => Mage::helper('magebid')->__('General Informations'),
            'title'     => Mage::helper('magebid')->__('General Informations'),
            'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_auction')->toHtml(),
            'active'    => true,
        ));		
		
        $this->addTab('details', array(
            'label'     => Mage::helper('magebid')->__('Details'),
            'title'     => Mage::helper('magebid')->__('Details'),
  			'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_details')->toHtml(),
        ));
		
        $this->addTab('description', array(
            'label'     => Mage::helper('magebid')->__('Description'),
            'title'     => Mage::helper('magebid')->__('Description'),
  			'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_description')->toHtml(),
        ));		

         $this->addTab('payment', array(
            'label'     => Mage::helper('magebid')->__('Payment Methods'),
            'title'     => Mage::helper('magebid')->__('Payment Methods'),
   			'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_payment')->toHtml(),
        ));
		
        $this->addTab('shipping', array(
            'label'     => Mage::helper('magebid')->__('Shipping Methods'),
            'title'     => Mage::helper('magebid')->__('Shipping Methods'),
    		'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_shipping')->toHtml(),
        ));			
		
        $this->addTab('category', array(
            'label'     => Mage::helper('magebid')->__('Categories'),
            'title'     => Mage::helper('magebid')->__('Categories'),
            'url'       => $this->getUrl('*/*/categories', array('_current' => true)),
            'class'     => 'ajax',			
        ));				
		
        $this->addTab('policy', array(
            'label'     => Mage::helper('magebid')->__('Policies'),
            'title'     => Mage::helper('magebid')->__('Policies'),
    		'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_policy')->toHtml(),
        ));			
		
        $this->addTab('layout', array(
            'label'     => Mage::helper('magebid')->__('Layout'),
            'title'     => Mage::helper('magebid')->__('Layout'),
    		'content'   => $this->getLayout()->createBlock('magebid/adminhtml_auction_edit_tab_layout')->toHtml(),
        ));		       
		

        return parent::_beforeToHtml();
    }
}