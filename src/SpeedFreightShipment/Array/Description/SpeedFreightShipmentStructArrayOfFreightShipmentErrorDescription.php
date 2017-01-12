<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription originally named ArrayOfFreightShipmentErrorDescription
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentErrorDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public $freightShipmentErrorDescription;
    /**
     * Constructor method for ArrayOfFreightShipmentErrorDescription
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentErrorDescription $_freightShipmentErrorDescription
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription
     */
    public function __construct($_freightShipmentErrorDescription = NULL)
    {
        parent::__construct(array('freightShipmentErrorDescription'=>$_freightShipmentErrorDescription),false);
    }
    /**
     * Get freightShipmentErrorDescription value
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription|null
     */
    public function getFreightShipmentErrorDescription()
    {
        return $this->freightShipmentErrorDescription;
    }
    /**
     * Set freightShipmentErrorDescription value
     * @param SpeedFreightShipmentStructFreightShipmentErrorDescription $_freightShipmentErrorDescription the freightShipmentErrorDescription
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public function setFreightShipmentErrorDescription($_freightShipmentErrorDescription)
    {
        return ($this->freightShipmentErrorDescription = $_freightShipmentErrorDescription);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentErrorDescription
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentErrorDescription
     */
    public function getAttributeName()
    {
        return 'freightShipmentErrorDescription';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription
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
