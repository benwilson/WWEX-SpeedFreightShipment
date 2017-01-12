<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentQuoteRequest
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentQuoteRequest originally named FreightShipmentQuoteRequest
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentQuoteRequest extends SpeedFreightShipmentWsdlClass
{
    /**
     * The senderCity
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderCity;
    /**
     * The senderState
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderState;
    /**
     * The senderZip
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderZip;
    /**
     * The senderCountryCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderCountryCode;
    /**
     * The insidePickup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insidePickup;
    /**
     * The liftgatePickup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $liftgatePickup;
    /**
     * The residentialPickup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $residentialPickup;
    /**
     * The tradeshowPickup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $tradeshowPickup;
    /**
     * The constructionSitePickup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $constructionSitePickup;
    /**
     * The limitedAccessPickup
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $limitedAccessPickup;
    /**
     * The limitedAccessPickupType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $limitedAccessPickupType;
    /**
     * The receiverCity
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverCity;
    /**
     * The receiverState
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverState;
    /**
     * The receiverZip
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverZip;
    /**
     * The receiverCountryCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverCountryCode;
    /**
     * The insideDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $insideDelivery;
    /**
     * The liftgateDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $liftgateDelivery;
    /**
     * The residentialDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $residentialDelivery;
    /**
     * The tradeshowDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $tradeshowDelivery;
    /**
     * The constructionSiteDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $constructionSiteDelivery;
    /**
     * The limitedAccessDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $limitedAccessDelivery;
    /**
     * The limitedAccessDeliveryType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $limitedAccessDeliveryType;
    /**
     * The notifyBeforeDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $notifyBeforeDelivery;
    /**
     * The collectOnDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $collectOnDelivery;
    /**
     * The collectOnDeliveryAmount
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $collectOnDeliveryAmount;
    /**
     * The CODIncludingFreightCharge
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $CODIncludingFreightCharge;
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentDate;
    /**
     * The insuranceDetail
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentInsuranceDetail
     */
    public $insuranceDetail;
    /**
     * The commdityDetails
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructFreightShipmentCommodityDetails
     */
    public $commdityDetails;
    /**
     * Constructor method for FreightShipmentQuoteRequest
     * @see parent::__construct()
     * @param string $_senderCity
     * @param string $_senderState
     * @param string $_senderZip
     * @param string $_senderCountryCode
     * @param string $_insidePickup
     * @param string $_liftgatePickup
     * @param string $_residentialPickup
     * @param string $_tradeshowPickup
     * @param string $_constructionSitePickup
     * @param string $_limitedAccessPickup
     * @param string $_limitedAccessPickupType
     * @param string $_receiverCity
     * @param string $_receiverState
     * @param string $_receiverZip
     * @param string $_receiverCountryCode
     * @param string $_insideDelivery
     * @param string $_liftgateDelivery
     * @param string $_residentialDelivery
     * @param string $_tradeshowDelivery
     * @param string $_constructionSiteDelivery
     * @param string $_limitedAccessDelivery
     * @param string $_limitedAccessDeliveryType
     * @param string $_notifyBeforeDelivery
     * @param string $_collectOnDelivery
     * @param string $_collectOnDeliveryAmount
     * @param string $_cODIncludingFreightCharge
     * @param string $_shipmentDate
     * @param SpeedFreightShipmentStructFreightShipmentInsuranceDetail $_insuranceDetail
     * @param SpeedFreightShipmentStructFreightShipmentCommodityDetails $_commdityDetails
     * @return SpeedFreightShipmentStructFreightShipmentQuoteRequest
     */
    public function __construct($_senderCity = NULL,$_senderState = NULL,$_senderZip = NULL,$_senderCountryCode = NULL,$_insidePickup = NULL,$_liftgatePickup = NULL,$_residentialPickup = NULL,$_tradeshowPickup = NULL,$_constructionSitePickup = NULL,$_limitedAccessPickup = NULL,$_limitedAccessPickupType = NULL,$_receiverCity = NULL,$_receiverState = NULL,$_receiverZip = NULL,$_receiverCountryCode = NULL,$_insideDelivery = NULL,$_liftgateDelivery = NULL,$_residentialDelivery = NULL,$_tradeshowDelivery = NULL,$_constructionSiteDelivery = NULL,$_limitedAccessDelivery = NULL,$_limitedAccessDeliveryType = NULL,$_notifyBeforeDelivery = NULL,$_collectOnDelivery = NULL,$_collectOnDeliveryAmount = NULL,$_cODIncludingFreightCharge = NULL,$_shipmentDate = NULL,$_insuranceDetail = NULL,$_commdityDetails = NULL)
    {
        parent::__construct(array('senderCity'=>$_senderCity,'senderState'=>$_senderState,'senderZip'=>$_senderZip,'senderCountryCode'=>$_senderCountryCode,'insidePickup'=>$_insidePickup,'liftgatePickup'=>$_liftgatePickup,'residentialPickup'=>$_residentialPickup,'tradeshowPickup'=>$_tradeshowPickup,'constructionSitePickup'=>$_constructionSitePickup,'limitedAccessPickup'=>$_limitedAccessPickup,'limitedAccessPickupType'=>$_limitedAccessPickupType,'receiverCity'=>$_receiverCity,'receiverState'=>$_receiverState,'receiverZip'=>$_receiverZip,'receiverCountryCode'=>$_receiverCountryCode,'insideDelivery'=>$_insideDelivery,'liftgateDelivery'=>$_liftgateDelivery,'residentialDelivery'=>$_residentialDelivery,'tradeshowDelivery'=>$_tradeshowDelivery,'constructionSiteDelivery'=>$_constructionSiteDelivery,'limitedAccessDelivery'=>$_limitedAccessDelivery,'limitedAccessDeliveryType'=>$_limitedAccessDeliveryType,'notifyBeforeDelivery'=>$_notifyBeforeDelivery,'collectOnDelivery'=>$_collectOnDelivery,'collectOnDeliveryAmount'=>$_collectOnDeliveryAmount,'CODIncludingFreightCharge'=>$_cODIncludingFreightCharge,'shipmentDate'=>$_shipmentDate,'insuranceDetail'=>$_insuranceDetail,'commdityDetails'=>$_commdityDetails),false);
    }
    /**
     * Get senderCity value
     * @return string|null
     */
    public function getSenderCity()
    {
        return $this->senderCity;
    }
    /**
     * Set senderCity value
     * @param string $_senderCity the senderCity
     * @return string
     */
    public function setSenderCity($_senderCity)
    {
        return ($this->senderCity = $_senderCity);
    }
    /**
     * Get senderState value
     * @return string|null
     */
    public function getSenderState()
    {
        return $this->senderState;
    }
    /**
     * Set senderState value
     * @param string $_senderState the senderState
     * @return string
     */
    public function setSenderState($_senderState)
    {
        return ($this->senderState = $_senderState);
    }
    /**
     * Get senderZip value
     * @return string|null
     */
    public function getSenderZip()
    {
        return $this->senderZip;
    }
    /**
     * Set senderZip value
     * @param string $_senderZip the senderZip
     * @return string
     */
    public function setSenderZip($_senderZip)
    {
        return ($this->senderZip = $_senderZip);
    }
    /**
     * Get senderCountryCode value
     * @return string|null
     */
    public function getSenderCountryCode()
    {
        return $this->senderCountryCode;
    }
    /**
     * Set senderCountryCode value
     * @param string $_senderCountryCode the senderCountryCode
     * @return string
     */
    public function setSenderCountryCode($_senderCountryCode)
    {
        return ($this->senderCountryCode = $_senderCountryCode);
    }
    /**
     * Get insidePickup value
     * @return string|null
     */
    public function getInsidePickup()
    {
        return $this->insidePickup;
    }
    /**
     * Set insidePickup value
     * @param string $_insidePickup the insidePickup
     * @return string
     */
    public function setInsidePickup($_insidePickup)
    {
        return ($this->insidePickup = $_insidePickup);
    }
    /**
     * Get liftgatePickup value
     * @return string|null
     */
    public function getLiftgatePickup()
    {
        return $this->liftgatePickup;
    }
    /**
     * Set liftgatePickup value
     * @param string $_liftgatePickup the liftgatePickup
     * @return string
     */
    public function setLiftgatePickup($_liftgatePickup)
    {
        return ($this->liftgatePickup = $_liftgatePickup);
    }
    /**
     * Get residentialPickup value
     * @return string|null
     */
    public function getResidentialPickup()
    {
        return $this->residentialPickup;
    }
    /**
     * Set residentialPickup value
     * @param string $_residentialPickup the residentialPickup
     * @return string
     */
    public function setResidentialPickup($_residentialPickup)
    {
        return ($this->residentialPickup = $_residentialPickup);
    }
    /**
     * Get tradeshowPickup value
     * @return string|null
     */
    public function getTradeshowPickup()
    {
        return $this->tradeshowPickup;
    }
    /**
     * Set tradeshowPickup value
     * @param string $_tradeshowPickup the tradeshowPickup
     * @return string
     */
    public function setTradeshowPickup($_tradeshowPickup)
    {
        return ($this->tradeshowPickup = $_tradeshowPickup);
    }
    /**
     * Get constructionSitePickup value
     * @return string|null
     */
    public function getConstructionSitePickup()
    {
        return $this->constructionSitePickup;
    }
    /**
     * Set constructionSitePickup value
     * @param string $_constructionSitePickup the constructionSitePickup
     * @return string
     */
    public function setConstructionSitePickup($_constructionSitePickup)
    {
        return ($this->constructionSitePickup = $_constructionSitePickup);
    }
    /**
     * Get limitedAccessPickup value
     * @return string|null
     */
    public function getLimitedAccessPickup()
    {
        return $this->limitedAccessPickup;
    }
    /**
     * Set limitedAccessPickup value
     * @param string $_limitedAccessPickup the limitedAccessPickup
     * @return string
     */
    public function setLimitedAccessPickup($_limitedAccessPickup)
    {
        return ($this->limitedAccessPickup = $_limitedAccessPickup);
    }
    /**
     * Get limitedAccessPickupType value
     * @return string|null
     */
    public function getLimitedAccessPickupType()
    {
        return $this->limitedAccessPickupType;
    }
    /**
     * Set limitedAccessPickupType value
     * @param string $_limitedAccessPickupType the limitedAccessPickupType
     * @return string
     */
    public function setLimitedAccessPickupType($_limitedAccessPickupType)
    {
        return ($this->limitedAccessPickupType = $_limitedAccessPickupType);
    }
    /**
     * Get receiverCity value
     * @return string|null
     */
    public function getReceiverCity()
    {
        return $this->receiverCity;
    }
    /**
     * Set receiverCity value
     * @param string $_receiverCity the receiverCity
     * @return string
     */
    public function setReceiverCity($_receiverCity)
    {
        return ($this->receiverCity = $_receiverCity);
    }
    /**
     * Get receiverState value
     * @return string|null
     */
    public function getReceiverState()
    {
        return $this->receiverState;
    }
    /**
     * Set receiverState value
     * @param string $_receiverState the receiverState
     * @return string
     */
    public function setReceiverState($_receiverState)
    {
        return ($this->receiverState = $_receiverState);
    }
    /**
     * Get receiverZip value
     * @return string|null
     */
    public function getReceiverZip()
    {
        return $this->receiverZip;
    }
    /**
     * Set receiverZip value
     * @param string $_receiverZip the receiverZip
     * @return string
     */
    public function setReceiverZip($_receiverZip)
    {
        return ($this->receiverZip = $_receiverZip);
    }
    /**
     * Get receiverCountryCode value
     * @return string|null
     */
    public function getReceiverCountryCode()
    {
        return $this->receiverCountryCode;
    }
    /**
     * Set receiverCountryCode value
     * @param string $_receiverCountryCode the receiverCountryCode
     * @return string
     */
    public function setReceiverCountryCode($_receiverCountryCode)
    {
        return ($this->receiverCountryCode = $_receiverCountryCode);
    }
    /**
     * Get insideDelivery value
     * @return string|null
     */
    public function getInsideDelivery()
    {
        return $this->insideDelivery;
    }
    /**
     * Set insideDelivery value
     * @param string $_insideDelivery the insideDelivery
     * @return string
     */
    public function setInsideDelivery($_insideDelivery)
    {
        return ($this->insideDelivery = $_insideDelivery);
    }
    /**
     * Get liftgateDelivery value
     * @return string|null
     */
    public function getLiftgateDelivery()
    {
        return $this->liftgateDelivery;
    }
    /**
     * Set liftgateDelivery value
     * @param string $_liftgateDelivery the liftgateDelivery
     * @return string
     */
    public function setLiftgateDelivery($_liftgateDelivery)
    {
        return ($this->liftgateDelivery = $_liftgateDelivery);
    }
    /**
     * Get residentialDelivery value
     * @return string|null
     */
    public function getResidentialDelivery()
    {
        return $this->residentialDelivery;
    }
    /**
     * Set residentialDelivery value
     * @param string $_residentialDelivery the residentialDelivery
     * @return string
     */
    public function setResidentialDelivery($_residentialDelivery)
    {
        return ($this->residentialDelivery = $_residentialDelivery);
    }
    /**
     * Get tradeshowDelivery value
     * @return string|null
     */
    public function getTradeshowDelivery()
    {
        return $this->tradeshowDelivery;
    }
    /**
     * Set tradeshowDelivery value
     * @param string $_tradeshowDelivery the tradeshowDelivery
     * @return string
     */
    public function setTradeshowDelivery($_tradeshowDelivery)
    {
        return ($this->tradeshowDelivery = $_tradeshowDelivery);
    }
    /**
     * Get constructionSiteDelivery value
     * @return string|null
     */
    public function getConstructionSiteDelivery()
    {
        return $this->constructionSiteDelivery;
    }
    /**
     * Set constructionSiteDelivery value
     * @param string $_constructionSiteDelivery the constructionSiteDelivery
     * @return string
     */
    public function setConstructionSiteDelivery($_constructionSiteDelivery)
    {
        return ($this->constructionSiteDelivery = $_constructionSiteDelivery);
    }
    /**
     * Get limitedAccessDelivery value
     * @return string|null
     */
    public function getLimitedAccessDelivery()
    {
        return $this->limitedAccessDelivery;
    }
    /**
     * Set limitedAccessDelivery value
     * @param string $_limitedAccessDelivery the limitedAccessDelivery
     * @return string
     */
    public function setLimitedAccessDelivery($_limitedAccessDelivery)
    {
        return ($this->limitedAccessDelivery = $_limitedAccessDelivery);
    }
    /**
     * Get limitedAccessDeliveryType value
     * @return string|null
     */
    public function getLimitedAccessDeliveryType()
    {
        return $this->limitedAccessDeliveryType;
    }
    /**
     * Set limitedAccessDeliveryType value
     * @param string $_limitedAccessDeliveryType the limitedAccessDeliveryType
     * @return string
     */
    public function setLimitedAccessDeliveryType($_limitedAccessDeliveryType)
    {
        return ($this->limitedAccessDeliveryType = $_limitedAccessDeliveryType);
    }
    /**
     * Get notifyBeforeDelivery value
     * @return string|null
     */
    public function getNotifyBeforeDelivery()
    {
        return $this->notifyBeforeDelivery;
    }
    /**
     * Set notifyBeforeDelivery value
     * @param string $_notifyBeforeDelivery the notifyBeforeDelivery
     * @return string
     */
    public function setNotifyBeforeDelivery($_notifyBeforeDelivery)
    {
        return ($this->notifyBeforeDelivery = $_notifyBeforeDelivery);
    }
    /**
     * Get collectOnDelivery value
     * @return string|null
     */
    public function getCollectOnDelivery()
    {
        return $this->collectOnDelivery;
    }
    /**
     * Set collectOnDelivery value
     * @param string $_collectOnDelivery the collectOnDelivery
     * @return string
     */
    public function setCollectOnDelivery($_collectOnDelivery)
    {
        return ($this->collectOnDelivery = $_collectOnDelivery);
    }
    /**
     * Get collectOnDeliveryAmount value
     * @return string|null
     */
    public function getCollectOnDeliveryAmount()
    {
        return $this->collectOnDeliveryAmount;
    }
    /**
     * Set collectOnDeliveryAmount value
     * @param string $_collectOnDeliveryAmount the collectOnDeliveryAmount
     * @return string
     */
    public function setCollectOnDeliveryAmount($_collectOnDeliveryAmount)
    {
        return ($this->collectOnDeliveryAmount = $_collectOnDeliveryAmount);
    }
    /**
     * Get CODIncludingFreightCharge value
     * @return string|null
     */
    public function getCODIncludingFreightCharge()
    {
        return $this->CODIncludingFreightCharge;
    }
    /**
     * Set CODIncludingFreightCharge value
     * @param string $_cODIncludingFreightCharge the CODIncludingFreightCharge
     * @return string
     */
    public function setCODIncludingFreightCharge($_cODIncludingFreightCharge)
    {
        return ($this->CODIncludingFreightCharge = $_cODIncludingFreightCharge);
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
     * Get insuranceDetail value
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDetail|null
     */
    public function getInsuranceDetail()
    {
        return $this->insuranceDetail;
    }
    /**
     * Set insuranceDetail value
     * @param SpeedFreightShipmentStructFreightShipmentInsuranceDetail $_insuranceDetail the insuranceDetail
     * @return SpeedFreightShipmentStructFreightShipmentInsuranceDetail
     */
    public function setInsuranceDetail($_insuranceDetail)
    {
        return ($this->insuranceDetail = $_insuranceDetail);
    }
    /**
     * Get commdityDetails value
     * @return SpeedFreightShipmentStructFreightShipmentCommodityDetails|null
     */
    public function getCommdityDetails()
    {
        return $this->commdityDetails;
    }
    /**
     * Set commdityDetails value
     * @param SpeedFreightShipmentStructFreightShipmentCommodityDetails $_commdityDetails the commdityDetails
     * @return SpeedFreightShipmentStructFreightShipmentCommodityDetails
     */
    public function setCommdityDetails($_commdityDetails)
    {
        return ($this->commdityDetails = $_commdityDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentQuoteRequest
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
