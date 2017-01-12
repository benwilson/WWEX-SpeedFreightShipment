<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentNotification
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentNotification originally named FreightShipmentNotification
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentNotification extends SpeedFreightShipmentWsdlClass
{
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $notification;
    /**
     * Constructor method for FreightShipmentNotification
     * @see parent::__construct()
     * @param string $_notification
     * @return SpeedFreightShipmentStructFreightShipmentNotification
     */
    public function __construct($_notification = NULL)
    {
        parent::__construct(array('notification'=>$_notification),false);
    }
    /**
     * Get notification value
     * @return string|null
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * Set notification value
     * @param string $_notification the notification
     * @return string
     */
    public function setNotification($_notification)
    {
        return ($this->notification = $_notification);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentNotification
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
