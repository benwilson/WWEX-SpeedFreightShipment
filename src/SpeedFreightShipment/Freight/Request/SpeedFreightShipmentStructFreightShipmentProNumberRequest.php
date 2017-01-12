<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentProNumberRequest
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentProNumberRequest originally named FreightShipmentProNumberRequest
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentProNumberRequest extends SpeedFreightShipmentWsdlClass
{
    /**
     * The shipmentBOLNumbers
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber
     */
    public $shipmentBOLNumbers;
    /**
     * Constructor method for FreightShipmentProNumberRequest
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber $_shipmentBOLNumbers
     * @return SpeedFreightShipmentStructFreightShipmentProNumberRequest
     */
    public function __construct($_shipmentBOLNumbers = NULL)
    {
        parent::__construct(array('shipmentBOLNumbers'=>($_shipmentBOLNumbers instanceof SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber)?$_shipmentBOLNumbers:new SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber($_shipmentBOLNumbers)),false);
    }
    /**
     * Get shipmentBOLNumbers value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber|null
     */
    public function getShipmentBOLNumbers()
    {
        return $this->shipmentBOLNumbers;
    }
    /**
     * Set shipmentBOLNumbers value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber $_shipmentBOLNumbers the shipmentBOLNumbers
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber
     */
    public function setShipmentBOLNumbers($_shipmentBOLNumbers)
    {
        return ($this->shipmentBOLNumbers = $_shipmentBOLNumbers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentProNumberRequest
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
