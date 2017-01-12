<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification originally named ArrayOfFreightShipmentCarrierNotification
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentCarrierNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public $freightShipmentCarrierNotification;
    /**
     * Constructor method for ArrayOfFreightShipmentCarrierNotification
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentCarrierNotification $_freightShipmentCarrierNotification
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification
     */
    public function __construct($_freightShipmentCarrierNotification = NULL)
    {
        parent::__construct(array('freightShipmentCarrierNotification'=>$_freightShipmentCarrierNotification),false);
    }
    /**
     * Get freightShipmentCarrierNotification value
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification|null
     */
    public function getFreightShipmentCarrierNotification()
    {
        return $this->freightShipmentCarrierNotification;
    }
    /**
     * Set freightShipmentCarrierNotification value
     * @param SpeedFreightShipmentStructFreightShipmentCarrierNotification $_freightShipmentCarrierNotification the freightShipmentCarrierNotification
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function setFreightShipmentCarrierNotification($_freightShipmentCarrierNotification)
    {
        return ($this->freightShipmentCarrierNotification = $_freightShipmentCarrierNotification);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentCarrierNotification
     */
    public function getAttributeName()
    {
        return 'freightShipmentCarrierNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification
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
