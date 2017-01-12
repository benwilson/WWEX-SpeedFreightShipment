<?php
/**
 * File for class SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse originally named getSpeedFreightShipmentProNumberResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse extends SpeedFreightShipmentWsdlClass
{
    /**
     * The getSpeedFreightShipmentProNumberReturn
     * @var SpeedFreightShipmentStructFreightShipmentProNumberResponse
     */
    public $getSpeedFreightShipmentProNumberReturn;
    /**
     * Constructor method for getSpeedFreightShipmentProNumberResponse
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentProNumberResponse $_getSpeedFreightShipmentProNumberReturn
     * @return SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse
     */
    public function __construct($_getSpeedFreightShipmentProNumberReturn = NULL)
    {
        parent::__construct(array('getSpeedFreightShipmentProNumberReturn'=>$_getSpeedFreightShipmentProNumberReturn),false);
    }
    /**
     * Get getSpeedFreightShipmentProNumberReturn value
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResponse|null
     */
    public function getGetSpeedFreightShipmentProNumberReturn()
    {
        return $this->getSpeedFreightShipmentProNumberReturn;
    }
    /**
     * Set getSpeedFreightShipmentProNumberReturn value
     * @param SpeedFreightShipmentStructFreightShipmentProNumberResponse $_getSpeedFreightShipmentProNumberReturn the getSpeedFreightShipmentProNumberReturn
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResponse
     */
    public function setGetSpeedFreightShipmentProNumberReturn($_getSpeedFreightShipmentProNumberReturn)
    {
        return ($this->getSpeedFreightShipmentProNumberReturn = $_getSpeedFreightShipmentProNumberReturn);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse
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
