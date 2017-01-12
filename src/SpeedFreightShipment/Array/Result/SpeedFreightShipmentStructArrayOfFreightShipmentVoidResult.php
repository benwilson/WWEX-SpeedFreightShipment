<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult originally named ArrayOfFreightShipmentVoidResult
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentVoidResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public $freightShipmentVoidResult;
    /**
     * Constructor method for ArrayOfFreightShipmentVoidResult
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentVoidResult $_freightShipmentVoidResult
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult
     */
    public function __construct($_freightShipmentVoidResult = NULL)
    {
        parent::__construct(array('freightShipmentVoidResult'=>$_freightShipmentVoidResult),false);
    }
    /**
     * Get freightShipmentVoidResult value
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult|null
     */
    public function getFreightShipmentVoidResult()
    {
        return $this->freightShipmentVoidResult;
    }
    /**
     * Set freightShipmentVoidResult value
     * @param SpeedFreightShipmentStructFreightShipmentVoidResult $_freightShipmentVoidResult the freightShipmentVoidResult
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function setFreightShipmentVoidResult($_freightShipmentVoidResult)
    {
        return ($this->freightShipmentVoidResult = $_freightShipmentVoidResult);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentVoidResult
     */
    public function getAttributeName()
    {
        return 'freightShipmentVoidResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult
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
