<?php
/**
 * File for class SpeedFreightShipmentStructWSHandlingUnit
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructWSHandlingUnit originally named WSHandlingUnit
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructWSHandlingUnit extends SpeedFreightShipmentWsdlClass
{
    /**
     * The typeOfHandlingUnit
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $typeOfHandlingUnit;
    /**
     * The numberOfHandlingUnit
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $numberOfHandlingUnit;
    /**
     * The handlingUnitHeight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $handlingUnitHeight;
    /**
     * The handlingUnitLength
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $handlingUnitLength;
    /**
     * The handlingUnitWidth
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $handlingUnitWidth;
    /**
     * The lineItemDetails
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfWSLineItem
     */
    public $lineItemDetails;
    /**
     * Constructor method for WSHandlingUnit
     * @see parent::__construct()
     * @param string $_typeOfHandlingUnit
     * @param string $_numberOfHandlingUnit
     * @param string $_handlingUnitHeight
     * @param string $_handlingUnitLength
     * @param string $_handlingUnitWidth
     * @param SpeedFreightShipmentStructArrayOfWSLineItem $_lineItemDetails
     * @return SpeedFreightShipmentStructWSHandlingUnit
     */
    public function __construct($_typeOfHandlingUnit = NULL,$_numberOfHandlingUnit = NULL,$_handlingUnitHeight = NULL,$_handlingUnitLength = NULL,$_handlingUnitWidth = NULL,$_lineItemDetails = NULL)
    {
        parent::__construct(array('typeOfHandlingUnit'=>$_typeOfHandlingUnit,'numberOfHandlingUnit'=>$_numberOfHandlingUnit,'handlingUnitHeight'=>$_handlingUnitHeight,'handlingUnitLength'=>$_handlingUnitLength,'handlingUnitWidth'=>$_handlingUnitWidth,'lineItemDetails'=>($_lineItemDetails instanceof SpeedFreightShipmentStructArrayOfWSLineItem)?$_lineItemDetails:new SpeedFreightShipmentStructArrayOfWSLineItem($_lineItemDetails)),false);
    }
    /**
     * Get typeOfHandlingUnit value
     * @return string|null
     */
    public function getTypeOfHandlingUnit()
    {
        return $this->typeOfHandlingUnit;
    }
    /**
     * Set typeOfHandlingUnit value
     * @param string $_typeOfHandlingUnit the typeOfHandlingUnit
     * @return string
     */
    public function setTypeOfHandlingUnit($_typeOfHandlingUnit)
    {
        return ($this->typeOfHandlingUnit = $_typeOfHandlingUnit);
    }
    /**
     * Get numberOfHandlingUnit value
     * @return string|null
     */
    public function getNumberOfHandlingUnit()
    {
        return $this->numberOfHandlingUnit;
    }
    /**
     * Set numberOfHandlingUnit value
     * @param string $_numberOfHandlingUnit the numberOfHandlingUnit
     * @return string
     */
    public function setNumberOfHandlingUnit($_numberOfHandlingUnit)
    {
        return ($this->numberOfHandlingUnit = $_numberOfHandlingUnit);
    }
    /**
     * Get handlingUnitHeight value
     * @return string|null
     */
    public function getHandlingUnitHeight()
    {
        return $this->handlingUnitHeight;
    }
    /**
     * Set handlingUnitHeight value
     * @param string $_handlingUnitHeight the handlingUnitHeight
     * @return string
     */
    public function setHandlingUnitHeight($_handlingUnitHeight)
    {
        return ($this->handlingUnitHeight = $_handlingUnitHeight);
    }
    /**
     * Get handlingUnitLength value
     * @return string|null
     */
    public function getHandlingUnitLength()
    {
        return $this->handlingUnitLength;
    }
    /**
     * Set handlingUnitLength value
     * @param string $_handlingUnitLength the handlingUnitLength
     * @return string
     */
    public function setHandlingUnitLength($_handlingUnitLength)
    {
        return ($this->handlingUnitLength = $_handlingUnitLength);
    }
    /**
     * Get handlingUnitWidth value
     * @return string|null
     */
    public function getHandlingUnitWidth()
    {
        return $this->handlingUnitWidth;
    }
    /**
     * Set handlingUnitWidth value
     * @param string $_handlingUnitWidth the handlingUnitWidth
     * @return string
     */
    public function setHandlingUnitWidth($_handlingUnitWidth)
    {
        return ($this->handlingUnitWidth = $_handlingUnitWidth);
    }
    /**
     * Get lineItemDetails value
     * @return SpeedFreightShipmentStructArrayOfWSLineItem|null
     */
    public function getLineItemDetails()
    {
        return $this->lineItemDetails;
    }
    /**
     * Set lineItemDetails value
     * @param SpeedFreightShipmentStructArrayOfWSLineItem $_lineItemDetails the lineItemDetails
     * @return SpeedFreightShipmentStructArrayOfWSLineItem
     */
    public function setLineItemDetails($_lineItemDetails)
    {
        return ($this->lineItemDetails = $_lineItemDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructWSHandlingUnit
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
