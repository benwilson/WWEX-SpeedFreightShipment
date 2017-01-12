<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentCarrierNotification
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentCarrierNotification originally named FreightShipmentCarrierNotification
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentCarrierNotification extends SpeedFreightShipmentWsdlClass
{
    /**
     * The carrierNotification
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $carrierNotification;
    /**
     * Constructor method for FreightShipmentCarrierNotification
     * @see parent::__construct()
     * @param string $_carrierNotification
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
     */
    public function __construct($_carrierNotification = NULL)
    {
        parent::__construct(array('carrierNotification'=>$_carrierNotification),false);
    }
    /**
     * Get carrierNotification value
     * @return string|null
     */
    public function getCarrierNotification()
    {
        return $this->carrierNotification;
    }
    /**
     * Set carrierNotification value
     * @param string $_carrierNotification the carrierNotification
     * @return string
     */
    public function setCarrierNotification($_carrierNotification)
    {
        return ($this->carrierNotification = $_carrierNotification);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentCarrierNotification
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
