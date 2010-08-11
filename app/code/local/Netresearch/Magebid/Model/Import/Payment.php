<?php
class Netresearch_Magebid_Model_Import_Payment extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('magebid/import_payment');
    }	
	
	public function importEbayPaymentMethods()
	{
		//get all payment Methods
		$ebay_payment_methods = Mage::getModel('magebid/ebay_miscellaneous')->geteBayDetails('PaymentOptionDetails');
		
		//If there are some payment services
		if (count($ebay_payment_methods->PaymentOptionDetails)>0)
		{
			//delete all existing payment services
			$collection = $this->getCollection();
			foreach ($collection as $colItem){
			       $colItem->delete();
			} 		
		}
		
		//Add the new Payment Services
		foreach ($ebay_payment_methods->PaymentOptionDetails as $payment_service)
		{
			//Build the data
			$data = array(
				'code' => $payment_service->PaymentOption,
				'description' => Mage::helper('coding')->encodePrepareDb($payment_service->Description),			
				);				
			
			//save
			$this->setData($data)->save();
		}	
		
		return count($ebay_payment_methods->PaymentOptionDetails);
	}
	
}
?>