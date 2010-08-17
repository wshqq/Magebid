<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ConditionType.php';

/**
 * Fields in this type provide condition values and display names. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ConditionValuesType.html
 *
 */
class ConditionValuesType extends EbatNs_ComplexType
{
	/**
	 * @var ConditionType
	 */
	protected $Condition;
	/**
	 * @var anyURI
	 */
	protected $ConditionHelpURL;

	/**
	 * @return ConditionType
	 * @param integer $index 
	 */
	function getCondition($index = null)
	{
		if ($index !== null) {
			return $this->Condition[$index];
		} else {
			return $this->Condition;
		}
	}
	/**
	 * @return void
	 * @param ConditionType $value 
	 * @param  $index 
	 */
	function setCondition($value, $index = null)
	{
		if ($index !== null) {
			$this->Condition[$index] = $value;
		} else {
			$this->Condition = $value;
		}
	}
	/**
	 * @return void
	 * @param ConditionType $value 
	 */
	function addCondition($value)
	{
		$this->Condition[] = $value;
	}
	/**
	 * @return anyURI
	 */
	function getConditionHelpURL()
	{
		return $this->ConditionHelpURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setConditionHelpURL($value)
	{
		$this->ConditionHelpURL = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ConditionValuesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Condition' =>
					array(
						'required' => false,
						'type' => 'ConditionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ConditionHelpURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>