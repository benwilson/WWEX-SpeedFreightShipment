<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentQuoteResult
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentQuoteResult originally named FreightShipmentQuoteResult
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentQuoteResult extends SpeedFreightShipmentWsdlClass
{
    /**
     * The shipmentQuoteId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentQuoteId;
    /**
     * The carrierSCAC
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $carrierSCAC;
    /**
     * The carrierName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $carrierName;
    /**
     * The totalPrice
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $totalPrice;
    /**
     * The transitDays
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $transitDays;
    /**
     * The guaranteedService
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $guaranteedService;
    /**
     * The highCostDeliveryShipment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $highCostDeliveryShipment;
    /**
     * The interline
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $interline;
    /**
     * The nmfcRequired
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $nmfcRequired;
    /**
     * The carrierNotifications
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification
     */
    public $carrierNotifications;
    /**
     * Constructor method for FreightShipmentQuoteResult
     * @see parent::__construct()
     * @param string $_shipmentQuoteId
     * @param string $_carrierSCAC
     * @param string $_carrierName
     * @param string $_totalPrice
     * @param string $_transitDays
     * @param string $_guaranteedService
     * @param string $_highCostDeliveryShipment
     * @param string $_interline
     * @param string $_nmfcRequired
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification $_carrierNotifications
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
     */
    public function __construct($_shipmentQuoteId = NULL,$_carrierSCAC = NULL,$_carrierName = NULL,$_totalPrice = NULL,$_transitDays = NULL,$_guaranteedService = NULL,$_highCostDeliveryShipment = NULL,$_interline = NULL,$_nmfcRequired = NULL,$_carrierNotifications = NULL)
    {
        parent::__construct(array('shipmentQuoteId'=>$_shipmentQuoteId,'carrierSCAC'=>$_carrierSCAC,'carrierName'=>$_carrierName,'totalPrice'=>$_totalPrice,'transitDays'=>$_transitDays,'guaranteedService'=>$_guaranteedService,'highCostDeliveryShipment'=>$_highCostDeliveryShipment,'interline'=>$_interline,'nmfcRequired'=>$_nmfcRequired,'carrierNotifications'=>($_carrierNotifications instanceof SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification)?$_carrierNotifications:new SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification($_carrierNotifications)),false);
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
     * Get carrierSCAC value
     * @return string|null
     */
    public function getCarrierSCAC()
    {
        return $this->carrierSCAC;
    }
    /**
     * Set carrierSCAC value
     * @param string $_carrierSCAC the carrierSCAC
     * @return string
     */
    public function setCarrierSCAC($_carrierSCAC)
    {
        return ($this->carrierSCAC = $_carrierSCAC);
    }
    /**
     * Get carrierName value
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }
    /**
     * Set carrierName value
     * @param string $_carrierName the carrierName
     * @return string
     */
    public function setCarrierName($_carrierName)
    {
        return ($this->carrierName = $_carrierName);
    }
    /**
     * Get totalPrice value
     * @return string|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param string $_totalPrice the totalPrice
     * @return string
     */
    public function setTotalPrice($_totalPrice)
    {
        return ($this->totalPrice = $_totalPrice);
    }
    /**
     * Get transitDays value
     * @return string|null
     */
    public function getTransitDays()
    {
        return $this->transitDays;
    }
    /**
     * Set transitDays value
     * @param string $_transitDays the transitDays
     * @return string
     */
    public function setTransitDays($_transitDays)
    {
        return ($this->transitDays = $_transitDays);
    }
    /**
     * Get guaranteedService value
     * @return string|null
     */
    public function getGuaranteedService()
    {
        return $this->guaranteedService;
    }
    /**
     * Set guaranteedService value
     * @param string $_guaranteedService the guaranteedService
     * @return string
     */
    public function setGuaranteedService($_guaranteedService)
    {
        return ($this->guaranteedService = $_guaranteedService);
    }
    /**
     * Get highCostDeliveryShipment value
     * @return string|null
     */
    public function getHighCostDeliveryShipment()
    {
        return $this->highCostDeliveryShipment;
    }
    /**
     * Set highCostDeliveryShipment value
     * @param string $_highCostDeliveryShipment the highCostDeliveryShipment
     * @return string
     */
    public function setHighCostDeliveryShipment($_highCostDeliveryShipment)
    {
        return ($this->highCostDeliveryShipment = $_highCostDeliveryShipment);
    }
    /**
     * Get interline value
     * @return string|null
     */
    public function getInterline()
    {
        return $this->interline;
    }
    /**
     * Set interline value
     * @param string $_interline the interline
     * @return string
     */
    public function setInterline($_interline)
    {
        return ($this->interline = $_interline);
    }
    /**
     * Get nmfcRequired value
     * @return string|null
     */
    public function getNmfcRequired()
    {
        return $this->nmfcRequired;
    }
    /**
     * Set nmfcRequired value
     * @param string $_nmfcRequired the nmfcRequired
     * @return string
     */
    public function setNmfcRequired($_nmfcRequired)
    {
        return ($this->nmfcRequired = $_nmfcRequired);
    }
    /**
     * Get carrierNotifications value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification|null
     */
    public function getCarrierNotifications()
    {
        return $this->carrierNotifications;
    }
    /**
     * Set carrierNotifications value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification $_carrierNotifications the carrierNotifications
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification
     */
    public function setCarrierNotifications($_carrierNotifications)
    {
        return ($this->carrierNotifications = $_carrierNotifications);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentQuoteResult
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
