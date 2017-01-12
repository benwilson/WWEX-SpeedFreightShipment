<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfWSLineItem
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfWSLineItem originally named ArrayOfWSLineItem
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfWSLineItem extends SpeedFreightShipmentWsdlClass
{
    /**
     * The wsLineItem
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructWSLineItem
     */
    public $wsLineItem;
    /**
     * Constructor method for ArrayOfWSLineItem
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructWSLineItem $_wsLineItem
     * @return SpeedFreightShipmentStructArrayOfWSLineItem
     */
    public function __construct($_wsLineItem = NULL)
    {
        parent::__construct(array('wsLineItem'=>$_wsLineItem),false);
    }
    /**
     * Get wsLineItem value
     * @return SpeedFreightShipmentStructWSLineItem|null
     */
    public function getWsLineItem()
    {
        return $this->wsLineItem;
    }
    /**
     * Set wsLineItem value
     * @param SpeedFreightShipmentStructWSLineItem $_wsLineItem the wsLineItem
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function setWsLineItem($_wsLineItem)
    {
        return ($this->wsLineItem = $_wsLineItem);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string wsLineItem
     */
    public function getAttributeName()
    {
        return 'wsLineItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfWSLineItem
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
