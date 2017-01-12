<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentReference
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentReference originally named ArrayOfFreightShipmentReference
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentReference extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentReference
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentReference
     */
    public $freightShipmentReference;
    /**
     * Constructor method for ArrayOfFreightShipmentReference
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentReference $_freightShipmentReference
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentReference
     */
    public function __construct($_freightShipmentReference = NULL)
    {
        parent::__construct(array('freightShipmentReference'=>$_freightShipmentReference),false);
    }
    /**
     * Get freightShipmentReference value
     * @return SpeedFreightShipmentStructFreightShipmentReference|null
     */
    public function getFreightShipmentReference()
    {
        return $this->freightShipmentReference;
    }
    /**
     * Set freightShipmentReference value
     * @param SpeedFreightShipmentStructFreightShipmentReference $_freightShipmentReference the freightShipmentReference
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function setFreightShipmentReference($_freightShipmentReference)
    {
        return ($this->freightShipmentReference = $_freightShipmentReference);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentReference
     */
    public function getAttributeName()
    {
        return 'freightShipmentReference';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentReference
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
