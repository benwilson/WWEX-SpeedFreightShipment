<?php
/**
 * File for class SpeedFreightShipmentStructQuoteSpeedFreightShipmentResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructQuoteSpeedFreightShipmentResponse originally named quoteSpeedFreightShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructQuoteSpeedFreightShipmentResponse extends SpeedFreightShipmentWsdlClass
{
    /**
     * The quoteSpeedFreightShipmentReturn
     * @var SpeedFreightShipmentStructFreightShipmentQuoteResponse
     */
    public $quoteSpeedFreightShipmentReturn;
    /**
     * Constructor method for quoteSpeedFreightShipmentResponse
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentQuoteResponse $_quoteSpeedFreightShipmentReturn
     * @return SpeedFreightShipmentStructQuoteSpeedFreightShipmentResponse
     */
    public function __construct($_quoteSpeedFreightShipmentReturn = NULL)
    {
        parent::__construct(array('quoteSpeedFreightShipmentReturn'=>$_quoteSpeedFreightShipmentReturn),false);
    }
    /**
     * Get quoteSpeedFreightShipmentReturn value
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResponse|null
     */
    public function getQuoteSpeedFreightShipmentReturn()
    {
        return $this->quoteSpeedFreightShipmentReturn;
    }
    /**
     * Set quoteSpeedFreightShipmentReturn value
     * @param SpeedFreightShipmentStructFreightShipmentQuoteResponse $_quoteSpeedFreightShipmentReturn the quoteSpeedFreightShipmentReturn
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResponse
     */
    public function setQuoteSpeedFreightShipmentReturn($_quoteSpeedFreightShipmentReturn)
    {
        return ($this->quoteSpeedFreightShipmentReturn = $_quoteSpeedFreightShipmentReturn);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructQuoteSpeedFreightShipmentResponse
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
