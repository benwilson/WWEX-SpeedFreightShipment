<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentAddressLabel
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentAddressLabel originally named FreightShipmentAddressLabel
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentAddressLabel extends SpeedFreightShipmentWsdlClass
{
    /**
     * The printShipmentAddessLabel
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $printShipmentAddessLabel;
    /**
     * The numberOfShipmentAddressLabel
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $numberOfShipmentAddressLabel;
    /**
     * Constructor method for FreightShipmentAddressLabel
     * @see parent::__construct()
     * @param string $_printShipmentAddessLabel
     * @param string $_numberOfShipmentAddressLabel
     * @return SpeedFreightShipmentStructFreightShipmentAddressLabel
     */
    public function __construct($_printShipmentAddessLabel = NULL,$_numberOfShipmentAddressLabel = NULL)
    {
        parent::__construct(array('printShipmentAddessLabel'=>$_printShipmentAddessLabel,'numberOfShipmentAddressLabel'=>$_numberOfShipmentAddressLabel),false);
    }
    /**
     * Get printShipmentAddessLabel value
     * @return string|null
     */
    public function getPrintShipmentAddessLabel()
    {
        return $this->printShipmentAddessLabel;
    }
    /**
     * Set printShipmentAddessLabel value
     * @param string $_printShipmentAddessLabel the printShipmentAddessLabel
     * @return string
     */
    public function setPrintShipmentAddessLabel($_printShipmentAddessLabel)
    {
        return ($this->printShipmentAddessLabel = $_printShipmentAddessLabel);
    }
    /**
     * Get numberOfShipmentAddressLabel value
     * @return string|null
     */
    public function getNumberOfShipmentAddressLabel()
    {
        return $this->numberOfShipmentAddressLabel;
    }
    /**
     * Set numberOfShipmentAddressLabel value
     * @param string $_numberOfShipmentAddressLabel the numberOfShipmentAddressLabel
     * @return string
     */
    public function setNumberOfShipmentAddressLabel($_numberOfShipmentAddressLabel)
    {
        return ($this->numberOfShipmentAddressLabel = $_numberOfShipmentAddressLabel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentAddressLabel
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
