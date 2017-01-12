<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel originally named ArrayOfFreightShipmentBOLLabel
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentBOLLabel
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public $freightShipmentBOLLabel;
    /**
     * Constructor method for ArrayOfFreightShipmentBOLLabel
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentBOLLabel $_freightShipmentBOLLabel
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel
     */
    public function __construct($_freightShipmentBOLLabel = NULL)
    {
        parent::__construct(array('freightShipmentBOLLabel'=>$_freightShipmentBOLLabel),false);
    }
    /**
     * Get freightShipmentBOLLabel value
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel|null
     */
    public function getFreightShipmentBOLLabel()
    {
        return $this->freightShipmentBOLLabel;
    }
    /**
     * Set freightShipmentBOLLabel value
     * @param SpeedFreightShipmentStructFreightShipmentBOLLabel $_freightShipmentBOLLabel the freightShipmentBOLLabel
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function setFreightShipmentBOLLabel($_freightShipmentBOLLabel)
    {
        return ($this->freightShipmentBOLLabel = $_freightShipmentBOLLabel);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentBOLLabel
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentBOLLabel
     */
    public function getAttributeName()
    {
        return 'freightShipmentBOLLabel';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel
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
