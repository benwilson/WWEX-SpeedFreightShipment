<?php
/**
 * File for class SpeedFreightShipmentStructQuoteSpeedFreightShipment
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructQuoteSpeedFreightShipment originally named quoteSpeedFreightShipment
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructQuoteSpeedFreightShipment extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentQuoteRequest
     * @var SpeedFreightShipmentStructFreightShipmentQuoteRequest
     */
    public $freightShipmentQuoteRequest;
    /**
     * Constructor method for quoteSpeedFreightShipment
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentQuoteRequest $_freightShipmentQuoteRequest
     * @return SpeedFreightShipmentStructQuoteSpeedFreightShipment
     */
    public function __construct($_freightShipmentQuoteRequest = NULL)
    {
        parent::__construct(array('freightShipmentQuoteRequest'=>$_freightShipmentQuoteRequest),false);
    }
    /**
     * Get freightShipmentQuoteRequest value
     * @return SpeedFreightShipmentStructFreightShipmentQuoteRequest|null
     */
    public function getFreightShipmentQuoteRequest()
    {
        return $this->freightShipmentQuoteRequest;
    }
    /**
     * Set freightShipmentQuoteRequest value
     * @param SpeedFreightShipmentStructFreightShipmentQuoteRequest $_freightShipmentQuoteRequest the freightShipmentQuoteRequest
     * @return SpeedFreightShipmentStructFreightShipmentQuoteRequest
     */
    public function setFreightShipmentQuoteRequest($_freightShipmentQuoteRequest)
    {
        return ($this->freightShipmentQuoteRequest = $_freightShipmentQuoteRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructQuoteSpeedFreightShipment
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
