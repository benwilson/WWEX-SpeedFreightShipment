<?php
/**
 * File for class SpeedFreightShipmentStructWSLineItemHazmatInfo
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructWSLineItemHazmatInfo originally named WSLineItemHazmatInfo
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructWSLineItemHazmatInfo extends SpeedFreightShipmentWsdlClass
{
    /**
     * The lineItemHazmatUNNumberHeader
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemHazmatUNNumberHeader;
    /**
     * The lineItemHazmatUNNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemHazmatUNNumber;
    /**
     * The lineItemHazmatClass
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemHazmatClass;
    /**
     * The lineItemHazmatEmContactPhone
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemHazmatEmContactPhone;
    /**
     * The lineItemHazmatPackagingGroup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemHazmatPackagingGroup;
    /**
     * Constructor method for WSLineItemHazmatInfo
     * @see parent::__construct()
     * @param string $_lineItemHazmatUNNumberHeader
     * @param string $_lineItemHazmatUNNumber
     * @param string $_lineItemHazmatClass
     * @param string $_lineItemHazmatEmContactPhone
     * @param string $_lineItemHazmatPackagingGroup
     * @return SpeedFreightShipmentStructWSLineItemHazmatInfo
     */
    public function __construct($_lineItemHazmatUNNumberHeader = NULL,$_lineItemHazmatUNNumber = NULL,$_lineItemHazmatClass = NULL,$_lineItemHazmatEmContactPhone = NULL,$_lineItemHazmatPackagingGroup = NULL)
    {
        parent::__construct(array('lineItemHazmatUNNumberHeader'=>$_lineItemHazmatUNNumberHeader,'lineItemHazmatUNNumber'=>$_lineItemHazmatUNNumber,'lineItemHazmatClass'=>$_lineItemHazmatClass,'lineItemHazmatEmContactPhone'=>$_lineItemHazmatEmContactPhone,'lineItemHazmatPackagingGroup'=>$_lineItemHazmatPackagingGroup),false);
    }
    /**
     * Get lineItemHazmatUNNumberHeader value
     * @return string|null
     */
    public function getLineItemHazmatUNNumberHeader()
    {
        return $this->lineItemHazmatUNNumberHeader;
    }
    /**
     * Set lineItemHazmatUNNumberHeader value
     * @param string $_lineItemHazmatUNNumberHeader the lineItemHazmatUNNumberHeader
     * @return string
     */
    public function setLineItemHazmatUNNumberHeader($_lineItemHazmatUNNumberHeader)
    {
        return ($this->lineItemHazmatUNNumberHeader = $_lineItemHazmatUNNumberHeader);
    }
    /**
     * Get lineItemHazmatUNNumber value
     * @return string|null
     */
    public function getLineItemHazmatUNNumber()
    {
        return $this->lineItemHazmatUNNumber;
    }
    /**
     * Set lineItemHazmatUNNumber value
     * @param string $_lineItemHazmatUNNumber the lineItemHazmatUNNumber
     * @return string
     */
    public function setLineItemHazmatUNNumber($_lineItemHazmatUNNumber)
    {
        return ($this->lineItemHazmatUNNumber = $_lineItemHazmatUNNumber);
    }
    /**
     * Get lineItemHazmatClass value
     * @return string|null
     */
    public function getLineItemHazmatClass()
    {
        return $this->lineItemHazmatClass;
    }
    /**
     * Set lineItemHazmatClass value
     * @param string $_lineItemHazmatClass the lineItemHazmatClass
     * @return string
     */
    public function setLineItemHazmatClass($_lineItemHazmatClass)
    {
        return ($this->lineItemHazmatClass = $_lineItemHazmatClass);
    }
    /**
     * Get lineItemHazmatEmContactPhone value
     * @return string|null
     */
    public function getLineItemHazmatEmContactPhone()
    {
        return $this->lineItemHazmatEmContactPhone;
    }
    /**
     * Set lineItemHazmatEmContactPhone value
     * @param string $_lineItemHazmatEmContactPhone the lineItemHazmatEmContactPhone
     * @return string
     */
    public function setLineItemHazmatEmContactPhone($_lineItemHazmatEmContactPhone)
    {
        return ($this->lineItemHazmatEmContactPhone = $_lineItemHazmatEmContactPhone);
    }
    /**
     * Get lineItemHazmatPackagingGroup value
     * @return string|null
     */
    public function getLineItemHazmatPackagingGroup()
    {
        return $this->lineItemHazmatPackagingGroup;
    }
    /**
     * Set lineItemHazmatPackagingGroup value
     * @param string $_lineItemHazmatPackagingGroup the lineItemHazmatPackagingGroup
     * @return string
     */
    public function setLineItemHazmatPackagingGroup($_lineItemHazmatPackagingGroup)
    {
        return ($this->lineItemHazmatPackagingGroup = $_lineItemHazmatPackagingGroup);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructWSLineItemHazmatInfo
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
