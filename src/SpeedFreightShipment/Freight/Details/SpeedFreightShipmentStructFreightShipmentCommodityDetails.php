<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentCommodityDetails
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentCommodityDetails originally named FreightShipmentCommodityDetails
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentCommodityDetails extends SpeedFreightShipmentWsdlClass
{
    /**
     * The is11FeetShipment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $is11FeetShipment;
    /**
     * The handlingUnitDetails
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfWSHandlingUnit
     */
    public $handlingUnitDetails;
    /**
     * Constructor method for FreightShipmentCommodityDetails
     * @see parent::__construct()
     * @param string $_is11FeetShipment
     * @param SpeedFreightShipmentStructArrayOfWSHandlingUnit $_handlingUnitDetails
     * @return SpeedFreightShipmentStructFreightShipmentCommodityDetails
     */
    public function __construct($_is11FeetShipment = NULL,$_handlingUnitDetails = NULL)
    {
        parent::__construct(array('is11FeetShipment'=>$_is11FeetShipment,'handlingUnitDetails'=>($_handlingUnitDetails instanceof SpeedFreightShipmentStructArrayOfWSHandlingUnit)?$_handlingUnitDetails:new SpeedFreightShipmentStructArrayOfWSHandlingUnit($_handlingUnitDetails)),false);
    }
    /**
     * Get is11FeetShipment value
     * @return string|null
     */
    public function getIs11FeetShipment()
    {
        return $this->is11FeetShipment;
    }
    /**
     * Set is11FeetShipment value
     * @param string $_is11FeetShipment the is11FeetShipment
     * @return string
     */
    public function setIs11FeetShipment($_is11FeetShipment)
    {
        return ($this->is11FeetShipment = $_is11FeetShipment);
    }
    /**
     * Get handlingUnitDetails value
     * @return SpeedFreightShipmentStructArrayOfWSHandlingUnit|null
     */
    public function getHandlingUnitDetails()
    {
        return $this->handlingUnitDetails;
    }
    /**
     * Set handlingUnitDetails value
     * @param SpeedFreightShipmentStructArrayOfWSHandlingUnit $_handlingUnitDetails the handlingUnitDetails
     * @return SpeedFreightShipmentStructArrayOfWSHandlingUnit
     */
    public function setHandlingUnitDetails($_handlingUnitDetails)
    {
        return ($this->handlingUnitDetails = $_handlingUnitDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentCommodityDetails
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
