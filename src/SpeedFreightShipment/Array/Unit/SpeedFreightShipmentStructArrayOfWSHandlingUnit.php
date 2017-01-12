<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfWSHandlingUnit
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfWSHandlingUnit originally named ArrayOfWSHandlingUnit
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfWSHandlingUnit extends SpeedFreightShipmentWsdlClass
{
    /**
     * The wsHandlingUnit
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructWSHandlingUnit
     */
    public $wsHandlingUnit;
    /**
     * Constructor method for ArrayOfWSHandlingUnit
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructWSHandlingUnit $_wsHandlingUnit
     * @return SpeedFreightShipmentStructArrayOfWSHandlingUnit
     */
    public function __construct($_wsHandlingUnit = NULL)
    {
        parent::__construct(array('wsHandlingUnit'=>$_wsHandlingUnit),false);
    }
    /**
     * Get wsHandlingUnit value
     * @return SpeedFreightShipmentStructWSHandlingUnit|null
     */
    public function getWsHandlingUnit()
    {
        return $this->wsHandlingUnit;
    }
    /**
     * Set wsHandlingUnit value
     * @param SpeedFreightShipmentStructWSHandlingUnit $_wsHandlingUnit the wsHandlingUnit
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function setWsHandlingUnit($_wsHandlingUnit)
    {
        return ($this->wsHandlingUnit = $_wsHandlingUnit);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string wsHandlingUnit
     */
    public function getAttributeName()
    {
        return 'wsHandlingUnit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfWSHandlingUnit
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
