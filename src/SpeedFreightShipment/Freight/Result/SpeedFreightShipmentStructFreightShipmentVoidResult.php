<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentVoidResult
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentVoidResult originally named FreightShipmentVoidResult
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentVoidResult extends SpeedFreightShipmentWsdlClass
{
    /**
     * The bolNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $bolNumber;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $description;
    /**
     * Constructor method for FreightShipmentVoidResult
     * @see parent::__construct()
     * @param string $_bolNumber
     * @param string $_description
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
     */
    public function __construct($_bolNumber = NULL,$_description = NULL)
    {
        parent::__construct(array('bolNumber'=>$_bolNumber,'description'=>$_description),false);
    }
    /**
     * Get bolNumber value
     * @return string|null
     */
    public function getBolNumber()
    {
        return $this->bolNumber;
    }
    /**
     * Set bolNumber value
     * @param string $_bolNumber the bolNumber
     * @return string
     */
    public function setBolNumber($_bolNumber)
    {
        return ($this->bolNumber = $_bolNumber);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $_description the description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->description = $_description);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentVoidResult
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
