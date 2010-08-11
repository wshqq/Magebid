<?php
class Netresearch_Magebid_Block_Adminhtml_Profile_New_Tab_Shipping extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();		
		
		$fieldset = $form->addFieldset('edit_magebid_shipping', array('legend' => Mage::helper('magebid')->__('Shipping Details')));
		
        $fieldset->addField('shipping_method', 'text', array(
                'name'=>'shipping_method',
                'class'=>'requried-entry',
        ));

        $form->getElement('shipping_method')->setRenderer(
            $this->getLayout()->createBlock('magebid/adminhtml_profile_new_tab_shipping_method')
        );   	
       
				
        //$form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();	
	}
}
?>