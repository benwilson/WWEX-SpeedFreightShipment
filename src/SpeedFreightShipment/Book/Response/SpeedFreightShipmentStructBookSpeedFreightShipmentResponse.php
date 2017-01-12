<?php
/**
 * File for class SpeedFreightShipmentStructBookSpeedFreightShipmentResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructBookSpeedFreightShipmentResponse originally named bookSpeedFreightShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructBookSpeedFreightShipmentResponse extends SpeedFreightShipmentWsdlClass
{
    /**
     * The bookSpeedFreightShipmentReturn
     * @var SpeedFreightShipmentStructFreightShipmentBookResponse
     */
    public $bookSpeedFreightShipmentReturn;
    /**
     * Constructor method for bookSpeedFreightShipmentResponse
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentBookResponse $_bookSpeedFreightShipmentReturn
     * @return SpeedFreightShipmentStructBookSpeedFreightShipmentResponse
     */
    public function __construct($_bookSpeedFreightShipmentReturn = NULL)
    {
        parent::__construct(array('bookSpeedFreightShipmentReturn'=>$_bookSpeedFreightShipmentReturn),false);
    }
    /**
     * Get bookSpeedFreightShipmentReturn value
     * @return SpeedFreightShipmentStructFreightShipmentBookResponse|null
     */
    public function getBookSpeedFreightShipmentReturn()
    {
        return $this->bookSpeedFreightShipmentReturn;
    }
    /**
     * Set bookSpeedFreightShipmentReturn value
     * @param SpeedFreightShipmentStructFreightShipmentBookResponse $_bookSpeedFreightShipmentReturn the bookSpeedFreightShipmentReturn
     * @return SpeedFreightShipmentStructFreightShipmentBookResponse
     */
    public function setBookSpeedFreightShipmentReturn($_bookSpeedFreightShipmentReturn)
    {
        return ($this->bookSpeedFreightShipmentReturn = $_bookSpeedFreightShipmentReturn);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructBookSpeedFreightShipmentResponse
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
