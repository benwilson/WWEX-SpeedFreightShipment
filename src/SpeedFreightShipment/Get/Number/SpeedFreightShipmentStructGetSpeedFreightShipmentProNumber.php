<?php
/**
 * File for class SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber originally named getSpeedFreightShipmentProNumber
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentProNumberRequest
     * @var SpeedFreightShipmentStructFreightShipmentProNumberRequest
     */
    public $freightShipmentProNumberRequest;
    /**
     * Constructor method for getSpeedFreightShipmentProNumber
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentProNumberRequest $_freightShipmentProNumberRequest
     * @return SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber
     */
    public function __construct($_freightShipmentProNumberRequest = NULL)
    {
        parent::__construct(array('freightShipmentProNumberRequest'=>$_freightShipmentProNumberRequest),false);
    }
    /**
     * Get freightShipmentProNumberRequest value
     * @return SpeedFreightShipmentStructFreightShipmentProNumberRequest|null
     */
    public function getFreightShipmentProNumberRequest()
    {
        return $this->freightShipmentProNumberRequest;
    }
    /**
     * Set freightShipmentProNumberRequest value
     * @param SpeedFreightShipmentStructFreightShipmentProNumberRequest $_freightShipmentProNumberRequest the freightShipmentProNumberRequest
     * @return SpeedFreightShipmentStructFreightShipmentProNumberRequest
     */
    public function setFreightShipmentProNumberRequest($_freightShipmentProNumberRequest)
    {
        return ($this->freightShipmentProNumberRequest = $_freightShipmentProNumberRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber
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
