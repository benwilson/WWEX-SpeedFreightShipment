<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentNotification
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentNotification originally named ArrayOfFreightShipmentNotification
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentNotification extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentNotification
     */
    public $freightShipmentNotification;
    /**
     * Constructor method for ArrayOfFreightShipmentNotification
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentNotification $_freightShipmentNotification
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentNotification
     */
    public function __construct($_freightShipmentNotification = NULL)
    {
        parent::__construct(array('freightShipmentNotification'=>$_freightShipmentNotification),false);
    }
    /**
     * Get freightShipmentNotification value
     * @return SpeedFreightShipmentStructFreightShipmentNotification|null
     */
    public function getFreightShipmentNotification()
    {
        return $this->freightShipmentNotification;
    }
    /**
     * Set freightShipmentNotification value
     * @param SpeedFreightShipmentStructFreightShipmentNotification $_freightShipmentNotification the freightShipmentNotification
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function setFreightShipmentNotification($_freightShipmentNotification)
    {
        return ($this->freightShipmentNotification = $_freightShipmentNotification);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentNotification
     */
    public function getAttributeName()
    {
        return 'freightShipmentNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentNotification
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
