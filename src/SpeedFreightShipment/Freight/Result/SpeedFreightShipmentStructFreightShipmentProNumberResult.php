<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentProNumberResult
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentProNumberResult originally named FreightShipmentProNumberResult
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentProNumberResult extends SpeedFreightShipmentWsdlClass
{
    /**
     * The bolNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $bolNumber;
    /**
     * The proNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $proNumber;
    /**
     * Constructor method for FreightShipmentProNumberResult
     * @see parent::__construct()
     * @param string $_bolNumber
     * @param string $_proNumber
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
     */
    public function __construct($_bolNumber = NULL,$_proNumber = NULL)
    {
        parent::__construct(array('bolNumber'=>$_bolNumber,'proNumber'=>$_proNumber),false);
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
     * Get proNumber value
     * @return string|null
     */
    public function getProNumber()
    {
        return $this->proNumber;
    }
    /**
     * Set proNumber value
     * @param string $_proNumber the proNumber
     * @return string
     */
    public function setProNumber($_proNumber)
    {
        return ($this->proNumber = $_proNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResult
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
