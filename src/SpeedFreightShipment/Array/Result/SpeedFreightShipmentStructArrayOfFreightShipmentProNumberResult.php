<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult originally named ArrayOfFreightShipmentProNumberResult
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentProNumberResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public $freightShipmentProNumberResult;
    /**
     * Constructor method for ArrayOfFreightShipmentProNumberResult
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentProNumberResult $_freightShipmentProNumberResult
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult
     */
    public function __construct($_freightShipmentProNumberResult = NULL)
    {
        parent::__construct(array('freightShipmentProNumberResult'=>$_freightShipmentProNumberResult),false);
    }
    /**
     * Get freightShipmentProNumberResult value
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult|null
     */
    public function getFreightShipmentProNumberResult()
    {
        return $this->freightShipmentProNumberResult;
    }
    /**
     * Set freightShipmentProNumberResult value
     * @param SpeedFreightShipmentStructFreightShipmentProNumberResult $_freightShipmentProNumberResult the freightShipmentProNumberResult
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function setFreightShipmentProNumberResult($_freightShipmentProNumberResult)
    {
        return ($this->freightShipmentProNumberResult = $_freightShipmentProNumberResult);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentProNumberResult
     */
    public function getAttributeName()
    {
        return 'freightShipmentProNumberResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult
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
