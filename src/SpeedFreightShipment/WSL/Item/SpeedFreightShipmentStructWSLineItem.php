<?php
/**
 * File for class SpeedFreightShipmentStructWSLineItem
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructWSLineItem originally named WSLineItem
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructWSLineItem extends SpeedFreightShipmentWsdlClass
{
    /**
     * The lineItemClass
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemClass;
    /**
     * The lineItemWeight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemWeight;
    /**
     * The lineItemDescription
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemDescription;
    /**
     * The lineItemNMFC
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemNMFC;
    /**
     * The lineItemPieceType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $lineItemPieceType;
    /**
     * The piecesOfLineItem
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $piecesOfLineItem;
    /**
     * The isHazmatLineItem
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $isHazmatLineItem;
    /**
     * The lineItemHazmatInfo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructWSLineItemHazmatInfo
     */
    public $lineItemHazmatInfo;
    /**
     * Constructor method for WSLineItem
     * @see parent::__construct()
     * @param string $_lineItemClass
     * @param string $_lineItemWeight
     * @param string $_lineItemDescription
     * @param string $_lineItemNMFC
     * @param string $_lineItemPieceType
     * @param string $_piecesOfLineItem
     * @param string $_isHazmatLineItem
     * @param SpeedFreightShipmentStructWSLineItemHazmatInfo $_lineItemHazmatInfo
     * @return SpeedFreightShipmentStructWSLineItem
     */
    public function __construct($_lineItemClass = NULL,$_lineItemWeight = NULL,$_lineItemDescription = NULL,$_lineItemNMFC = NULL,$_lineItemPieceType = NULL,$_piecesOfLineItem = NULL,$_isHazmatLineItem = NULL,$_lineItemHazmatInfo = NULL)
    {
        parent::__construct(array('lineItemClass'=>$_lineItemClass,'lineItemWeight'=>$_lineItemWeight,'lineItemDescription'=>$_lineItemDescription,'lineItemNMFC'=>$_lineItemNMFC,'lineItemPieceType'=>$_lineItemPieceType,'piecesOfLineItem'=>$_piecesOfLineItem,'isHazmatLineItem'=>$_isHazmatLineItem,'lineItemHazmatInfo'=>$_lineItemHazmatInfo),false);
    }
    /**
     * Get lineItemClass value
     * @return string|null
     */
    public function getLineItemClass()
    {
        return $this->lineItemClass;
    }
    /**
     * Set lineItemClass value
     * @param string $_lineItemClass the lineItemClass
     * @return string
     */
    public function setLineItemClass($_lineItemClass)
    {
        return ($this->lineItemClass = $_lineItemClass);
    }
    /**
     * Get lineItemWeight value
     * @return string|null
     */
    public function getLineItemWeight()
    {
        return $this->lineItemWeight;
    }
    /**
     * Set lineItemWeight value
     * @param string $_lineItemWeight the lineItemWeight
     * @return string
     */
    public function setLineItemWeight($_lineItemWeight)
    {
        return ($this->lineItemWeight = $_lineItemWeight);
    }
    /**
     * Get lineItemDescription value
     * @return string|null
     */
    public function getLineItemDescription()
    {
        return $this->lineItemDescription;
    }
    /**
     * Set lineItemDescription value
     * @param string $_lineItemDescription the lineItemDescription
     * @return string
     */
    public function setLineItemDescription($_lineItemDescription)
    {
        return ($this->lineItemDescription = $_lineItemDescription);
    }
    /**
     * Get lineItemNMFC value
     * @return string|null
     */
    public function getLineItemNMFC()
    {
        return $this->lineItemNMFC;
    }
    /**
     * Set lineItemNMFC value
     * @param string $_lineItemNMFC the lineItemNMFC
     * @return string
     */
    public function setLineItemNMFC($_lineItemNMFC)
    {
        return ($this->lineItemNMFC = $_lineItemNMFC);
    }
    /**
     * Get lineItemPieceType value
     * @return string|null
     */
    public function getLineItemPieceType()
    {
        return $this->lineItemPieceType;
    }
    /**
     * Set lineItemPieceType value
     * @param string $_lineItemPieceType the lineItemPieceType
     * @return string
     */
    public function setLineItemPieceType($_lineItemPieceType)
    {
        return ($this->lineItemPieceType = $_lineItemPieceType);
    }
    /**
     * Get piecesOfLineItem value
     * @return string|null
     */
    public function getPiecesOfLineItem()
    {
        return $this->piecesOfLineItem;
    }
    /**
     * Set piecesOfLineItem value
     * @param string $_piecesOfLineItem the piecesOfLineItem
     * @return string
     */
    public function setPiecesOfLineItem($_piecesOfLineItem)
    {
        return ($this->piecesOfLineItem = $_piecesOfLineItem);
    }
    /**
     * Get isHazmatLineItem value
     * @return string|null
     */
    public function getIsHazmatLineItem()
    {
        return $this->isHazmatLineItem;
    }
    /**
     * Set isHazmatLineItem value
     * @param string $_isHazmatLineItem the isHazmatLineItem
     * @return string
     */
    public function setIsHazmatLineItem($_isHazmatLineItem)
    {
        return ($this->isHazmatLineItem = $_isHazmatLineItem);
    }
    /**
     * Get lineItemHazmatInfo value
     * @return SpeedFreightShipmentStructWSLineItemHazmatInfo|null
     */
    public function getLineItemHazmatInfo()
    {
        return $this->lineItemHazmatInfo;
    }
    /**
     * Set lineItemHazmatInfo value
     * @param SpeedFreightShipmentStructWSLineItemHazmatInfo $_lineItemHazmatInfo the lineItemHazmatInfo
     * @return SpeedFreightShipmentStructWSLineItemHazmatInfo
     */
    public function setLineItemHazmatInfo($_lineItemHazmatInfo)
    {
        return ($this->lineItemHazmatInfo = $_lineItemHazmatInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructWSLineItem
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
