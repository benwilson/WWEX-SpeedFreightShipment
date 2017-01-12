<?php
/**
 * File for class SpeedFreightShipmentStructBookSpeedFreightShipment
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructBookSpeedFreightShipment originally named bookSpeedFreightShipment
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructBookSpeedFreightShipment extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentBookRequest
     * @var SpeedFreightShipmentStructFreightShipmentBookRequest
     */
    public $freightShipmentBookRequest;
    /**
     * Constructor method for bookSpeedFreightShipment
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentBookRequest $_freightShipmentBookRequest
     * @return SpeedFreightShipmentStructBookSpeedFreightShipment
     */
    public function __construct($_freightShipmentBookRequest = NULL)
    {
        parent::__construct(array('freightShipmentBookRequest'=>$_freightShipmentBookRequest),false);
    }
    /**
     * Get freightShipmentBookRequest value
     * @return SpeedFreightShipmentStructFreightShipmentBookRequest|null
     */
    public function getFreightShipmentBookRequest()
    {
        return $this->freightShipmentBookRequest;
    }
    /**
     * Set freightShipmentBookRequest value
     * @param SpeedFreightShipmentStructFreightShipmentBookRequest $_freightShipmentBookRequest the freightShipmentBookRequest
     * @return SpeedFreightShipmentStructFreightShipmentBookRequest
     */
    public function setFreightShipmentBookRequest($_freightShipmentBookRequest)
    {
        return ($this->freightShipmentBookRequest = $_freightShipmentBookRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructBookSpeedFreightShipment
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
