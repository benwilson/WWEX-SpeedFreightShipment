<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentInsuranceDetail
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentInsuranceDetail originally named FreightShipmentInsuranceDetail
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentInsuranceDetail extends SpeedFreightShipmentWsdlClass
{
    /**
     * The insuranceCategory
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insuranceCategory;
    /**
     * The insuredCommodityValue
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insuredCommodityValue;
    /**
     * The insuranceIncludingFreightCharge
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insuranceIncludingFreightCharge;
    /**
     * Constructor method for FreightShipmentInsuranceDetail
     * @see parent::__construct()
     * @param string $_insuranceCategory
     * @param string $_insuredCommodityValue
     * @param string $_insuranceIncludingFreightCharge
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDetail
     */
    public function __construct($_insuranceCategory = NULL,$_insuredCommodityValue = NULL,$_insuranceIncludingFreightCharge = NULL)
    {
        parent::__construct(array('insuranceCategory'=>$_insuranceCategory,'insuredCommodityValue'=>$_insuredCommodityValue,'insuranceIncludingFreightCharge'=>$_insuranceIncludingFreightCharge),false);
    }
    /**
     * Get insuranceCategory value
     * @return string|null
     */
    public function getInsuranceCategory()
    {
        return $this->insuranceCategory;
    }
    /**
     * Set insuranceCategory value
     * @param string $_insuranceCategory the insuranceCategory
     * @return string
     */
    public function setInsuranceCategory($_insuranceCategory)
    {
        return ($this->insuranceCategory = $_insuranceCategory);
    }
    /**
     * Get insuredCommodityValue value
     * @return string|null
     */
    public function getInsuredCommodityValue()
    {
        return $this->insuredCommodityValue;
    }
    /**
     * Set insuredCommodityValue value
     * @param string $_insuredCommodityValue the insuredCommodityValue
     * @return string
     */
    public function setInsuredCommodityValue($_insuredCommodityValue)
    {
        return ($this->insuredCommodityValue = $_insuredCommodityValue);
    }
    /**
     * Get insuranceIncludingFreightCharge value
     * @return string|null
     */
    public function getInsuranceIncludingFreightCharge()
    {
        return $this->insuranceIncludingFreightCharge;
    }
    /**
     * Set insuranceIncludingFreightCharge value
     * @param string $_insuranceIncludingFreightCharge the insuranceIncludingFreightCharge
     * @return string
     */
    public function setInsuranceIncludingFreightCharge($_insuranceIncludingFreightCharge)
    {
        return ($this->insuranceIncludingFreightCharge = $_insuranceIncludingFreightCharge);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDetail
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
