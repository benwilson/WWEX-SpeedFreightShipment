<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber originally named ArrayOfFreightShipmentBOLNumber
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentBOLNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $freightShipmentBOLNumber;
    /**
     * Constructor method for ArrayOfFreightShipmentBOLNumber
     * @see parent::__construct()
     * @param string $_freightShipmentBOLNumber
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber
     */
    public function __construct($_freightShipmentBOLNumber = NULL)
    {
        parent::__construct(array('freightShipmentBOLNumber'=>$_freightShipmentBOLNumber),false);
    }
    /**
     * Get freightShipmentBOLNumber value
     * @return string|null
     */
    public function getFreightShipmentBOLNumber()
    {
        return $this->freightShipmentBOLNumber;
    }
    /**
     * Set freightShipmentBOLNumber value
     * @param string $_freightShipmentBOLNumber the freightShipmentBOLNumber
     * @return string
     */
    public function setFreightShipmentBOLNumber($_freightShipmentBOLNumber)
    {
        return ($this->freightShipmentBOLNumber = $_freightShipmentBOLNumber);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return string
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return string
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentBOLNumber
     */
    public function getAttributeName()
    {
        return 'freightShipmentBOLNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber
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
