<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentQuoteResult
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentQuoteResult originally named ArrayOfFreightShipmentQuoteResult
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentQuoteResult extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentQuoteResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public $freightShipmentQuoteResult;
    /**
     * Constructor method for ArrayOfFreightShipmentQuoteResult
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentQuoteResult $_freightShipmentQuoteResult
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentQuoteResult
     */
    public function __construct($_freightShipmentQuoteResult = NULL)
    {
        parent::__construct(array('freightShipmentQuoteResult'=>$_freightShipmentQuoteResult),false);
    }
    /**
     * Get freightShipmentQuoteResult value
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult|null
     */
    public function getFreightShipmentQuoteResult()
    {
        return $this->freightShipmentQuoteResult;
    }
    /**
     * Set freightShipmentQuoteResult value
     * @param SpeedFreightShipmentStructFreightShipmentQuoteResult $_freightShipmentQuoteResult the freightShipmentQuoteResult
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function setFreightShipmentQuoteResult($_freightShipmentQuoteResult)
    {
        return ($this->freightShipmentQuoteResult = $_freightShipmentQuoteResult);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentQuoteResult
     */
    public function getAttributeName()
    {
        return 'freightShipmentQuoteResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentQuoteResult
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
