<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentInsuranceDescription
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentInsuranceDescription originally named FreightShipmentInsuranceDescription
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentInsuranceDescription extends SpeedFreightShipmentWsdlClass
{
    /**
     * The insuranceDescriptionOfCargo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insuranceDescriptionOfCargo;
    /**
     * The insuranceMarksNumbers
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insuranceMarksNumbers;
    /**
     * Constructor method for FreightShipmentInsuranceDescription
     * @see parent::__construct()
     * @param string $_insuranceDescriptionOfCargo
     * @param string $_insuranceMarksNumbers
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDescription
     */
    public function __construct($_insuranceDescriptionOfCargo = NULL,$_insuranceMarksNumbers = NULL)
    {
        parent::__construct(array('insuranceDescriptionOfCargo'=>$_insuranceDescriptionOfCargo,'insuranceMarksNumbers'=>$_insuranceMarksNumbers),false);
    }
    /**
     * Get insuranceDescriptionOfCargo value
     * @return string|null
     */
    public function getInsuranceDescriptionOfCargo()
    {
        return $this->insuranceDescriptionOfCargo;
    }
    /**
     * Set insuranceDescriptionOfCargo value
     * @param string $_insuranceDescriptionOfCargo the insuranceDescriptionOfCargo
     * @return string
     */
    public function setInsuranceDescriptionOfCargo($_insuranceDescriptionOfCargo)
    {
        return ($this->insuranceDescriptionOfCargo = $_insuranceDescriptionOfCargo);
    }
    /**
     * Get insuranceMarksNumbers value
     * @return string|null
     */
    public function getInsuranceMarksNumbers()
    {
        return $this->insuranceMarksNumbers;
    }
    /**
     * Set insuranceMarksNumbers value
     * @param string $_insuranceMarksNumbers the insuranceMarksNumbers
     * @return string
     */
    public function setInsuranceMarksNumbers($_insuranceMarksNumbers)
    {
        return ($this->insuranceMarksNumbers = $_insuranceMarksNumbers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDescription
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
