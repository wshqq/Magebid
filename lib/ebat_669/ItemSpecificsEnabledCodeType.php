<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether custom Item Specifics are enabled for a category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemSpecificsEnabledCodeType.html
 *
 * @property string Disabled
 * @property string Enabled
 * @property string CustomCode
 */
class ItemSpecificsEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_Enabled = 'Enabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemSpecificsEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemSpecificsEnabledCodeType = new ItemSpecificsEnabledCodeType();

?>