<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentBookRequest
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentBookRequest originally named FreightShipmentBookRequest
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentBookRequest extends SpeedFreightShipmentWsdlClass
{
    /**
     * The shipmentQuoteId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentQuoteId;
    /**
     * The freightShipmentSenderDetail
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentSenderDetail
     */
    public $freightShipmentSenderDetail;
    /**
     * The freightShipmentReceiverDetail
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentReceiverDetail
     */
    public $freightShipmentReceiverDetail;
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentDate;
    /**
     * The shipmentReadyTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentReadyTime;
    /**
     * The shipmentClosingTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentClosingTime;
    /**
     * The freightShipmentCODInfo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentCODRemitInfo
     */
    public $freightShipmentCODInfo;
    /**
     * The freightShipmentInsuranceDescription
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentInsuranceDescription
     */
    public $freightShipmentInsuranceDescription;
    /**
     * The shipmentReferences
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentReference
     */
    public $shipmentReferences;
    /**
     * The specialInstruction
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $specialInstruction;
    /**
     * The freightShipmentAddressLabel
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentAddressLabel
     */
    public $freightShipmentAddressLabel;
    /**
     * Constructor method for FreightShipmentBookRequest
     * @see parent::__construct()
     * @param string $_shipmentQuoteId
     * @param SpeedFreightShipmentStructFreightShipmentSenderDetail $_freightShipmentSenderDetail
     * @param SpeedFreightShipmentStructFreightShipmentReceiverDetail $_freightShipmentReceiverDetail
     * @param string $_shipmentDate
     * @param string $_shipmentReadyTime
     * @param string $_shipmentClosingTime
     * @param SpeedFreightShipmentStructFreightShipmentCODRemitInfo $_freightShipmentCODInfo
     * @param SpeedFreightShipmentStructFreightShipmentInsuranceDescription $_freightShipmentInsuranceDescription
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentReference $_shipmentReferences
     * @param string $_specialInstruction
     * @param SpeedFreightShipmentStructFreightShipmentAddressLabel $_freightShipmentAddressLabel
     * @return SpeedFreightShipmentStructFreightShipmentBookRequest
     */
    public function __construct($_shipmentQuoteId = NULL,$_freightShipmentSenderDetail = NULL,$_freightShipmentReceiverDetail = NULL,$_shipmentDate = NULL,$_shipmentReadyTime = NULL,$_shipmentClosingTime = NULL,$_freightShipmentCODInfo = NULL,$_freightShipmentInsuranceDescription = NULL,$_shipmentReferences = NULL,$_specialInstruction = NULL,$_freightShipmentAddressLabel = NULL)
    {
        parent::__construct(array('shipmentQuoteId'=>$_shipmentQuoteId,'freightShipmentSenderDetail'=>$_freightShipmentSenderDetail,'freightShipmentReceiverDetail'=>$_freightShipmentReceiverDetail,'shipmentDate'=>$_shipmentDate,'shipmentReadyTime'=>$_shipmentReadyTime,'shipmentClosingTime'=>$_shipmentClosingTime,'freightShipmentCODInfo'=>$_freightShipmentCODInfo,'freightShipmentInsuranceDescription'=>$_freightShipmentInsuranceDescription,'shipmentReferences'=>($_shipmentReferences instanceof SpeedFreightShipmentStructArrayOfFreightShipmentReference)?$_shipmentReferences:new SpeedFreightShipmentStructArrayOfFreightShipmentReference($_shipmentReferences),'specialInstruction'=>$_specialInstruction,'freightShipmentAddressLabel'=>$_freightShipmentAddressLabel),false);
    }
    /**
     * Get shipmentQuoteId value
     * @return string|null
     */
    public function getShipmentQuoteId()
    {
        return $this->shipmentQuoteId;
    }
    /**
     * Set shipmentQuoteId value
     * @param string $_shipmentQuoteId the shipmentQuoteId
     * @return string
     */
    public function setShipmentQuoteId($_shipmentQuoteId)
    {
        return ($this->shipmentQuoteId = $_shipmentQuoteId);
    }
    /**
     * Get freightShipmentSenderDetail value
     * @return SpeedFreightShipmentStructFreightShipmentSenderDetail|null
     */
    public function getFreightShipmentSenderDetail()
    {
        return $this->freightShipmentSenderDetail;
    }
    /**
     * Set freightShipmentSenderDetail value
     * @param SpeedFreightShipmentStructFreightShipmentSenderDetail $_freightShipmentSenderDetail the freightShipmentSenderDetail
     * @return SpeedFreightShipmentStructFreightShipmentSenderDetail
     */
    public function setFreightShipmentSenderDetail($_freightShipmentSenderDetail)
    {
        return ($this->freightShipmentSenderDetail = $_freightShipmentSenderDetail);
    }
    /**
     * Get freightShipmentReceiverDetail value
     * @return SpeedFreightShipmentStructFreightShipmentReceiverDetail|null
     */
    public function getFreightShipmentReceiverDetail()
    {
        return $this->freightShipmentReceiverDetail;
    }
    /**
     * Set freightShipmentReceiverDetail value
     * @param SpeedFreightShipmentStructFreightShipmentReceiverDetail $_freightShipmentReceiverDetail the freightShipmentReceiverDetail
     * @return SpeedFreightShipmentStructFreightShipmentReceiverDetail
     */
    public function setFreightShipmentReceiverDetail($_freightShipmentReceiverDetail)
    {
        return ($this->freightShipmentReceiverDetail = $_freightShipmentReceiverDetail);
    }
    /**
     * Get shipmentDate value
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }
    /**
     * Set shipmentDate value
     * @param string $_shipmentDate the shipmentDate
     * @return string
     */
    public function setShipmentDate($_shipmentDate)
    {
        return ($this->shipmentDate = $_shipmentDate);
    }
    /**
     * Get shipmentReadyTime value
     * @return string|null
     */
    public function getShipmentReadyTime()
    {
        return $this->shipmentReadyTime;
    }
    /**
     * Set shipmentReadyTime value
     * @param string $_shipmentReadyTime the shipmentReadyTime
     * @return string
     */
    public function setShipmentReadyTime($_shipmentReadyTime)
    {
        return ($this->shipmentReadyTime = $_shipmentReadyTime);
    }
    /**
     * Get shipmentClosingTime value
     * @return string|null
     */
    public function getShipmentClosingTime()
    {
        return $this->shipmentClosingTime;
    }
    /**
     * Set shipmentClosingTime value
     * @param string $_shipmentClosingTime the shipmentClosingTime
     * @return string
     */
    public function setShipmentClosingTime($_shipmentClosingTime)
    {
        return ($this->shipmentClosingTime = $_shipmentClosingTime);
    }
    /**
     * Get freightShipmentCODInfo value
     * @return SpeedFreightShipmentStructFreightShipmentCODRemitInfo|null
     */
    public function getFreightShipmentCODInfo()
    {
        return $this->freightShipmentCODInfo;
    }
    /**
     * Set freightShipmentCODInfo value
     * @param SpeedFreightShipmentStructFreightShipmentCODRemitInfo $_freightShipmentCODInfo the freightShipmentCODInfo
     * @return SpeedFreightShipmentStructFreightShipmentCODRemitInfo
     */
    public function setFreightShipmentCODInfo($_freightShipmentCODInfo)
    {
        return ($this->freightShipmentCODInfo = $_freightShipmentCODInfo);
    }
    /**
     * Get freightShipmentInsuranceDescription value
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDescription|null
     */
    public function getFreightShipmentInsuranceDescription()
    {
        return $this->freightShipmentInsuranceDescription;
    }
    /**
     * Set freightShipmentInsuranceDescription value
     * @param SpeedFreightShipmentStructFreightShipmentInsuranceDescription $_freightShipmentInsuranceDescription the freightShipmentInsuranceDescription
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDescription
     */
    public function setFreightShipmentInsuranceDescription($_freightShipmentInsuranceDescription)
    {
        return ($this->freightShipmentInsuranceDescription = $_freightShipmentInsuranceDescription);
    }
    /**
     * Get shipmentReferences value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentReference|null
     */
    public function getShipmentReferences()
    {
        return $this->shipmentReferences;
    }
    /**
     * Set shipmentReferences value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentReference $_shipmentReferences the shipmentReferences
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentReference
     */
    public function setShipmentReferences($_shipmentReferences)
    {
        return ($this->shipmentReferences = $_shipmentReferences);
    }
    /**
     * Get specialInstruction value
     * @return string|null
     */
    public function getSpecialInstruction()
    {
        return $this->specialInstruction;
    }
    /**
     * Set specialInstruction value
     * @param string $_specialInstruction the specialInstruction
     * @return string
     */
    public function setSpecialInstruction($_specialInstruction)
    {
        return ($this->specialInstruction = $_specialInstruction);
    }
    /**
     * Get freightShipmentAddressLabel value
     * @return SpeedFreightShipmentStructFreightShipmentAddressLabel|null
     */
    public function getFreightShipmentAddressLabel()
    {
        return $this->freightShipmentAddressLabel;
    }
    /**
     * Set freightShipmentAddressLabel value
     * @param SpeedFreightShipmentStructFreightShipmentAddressLabel $_freightShipmentAddressLabel the freightShipmentAddressLabel
     * @return SpeedFreightShipmentStructFreightShipmentAddressLabel
     */
    public function setFreightShipmentAddressLabel($_freightShipmentAddressLabel)
    {
        return ($this->freightShipmentAddressLabel = $_freightShipmentAddressLabel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentBookRequest
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
