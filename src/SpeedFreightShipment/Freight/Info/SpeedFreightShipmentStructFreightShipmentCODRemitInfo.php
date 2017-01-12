<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentCODRemitInfo
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentCODRemitInfo originally named FreightShipmentCODRemitInfo
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentCODRemitInfo extends SpeedFreightShipmentWsdlClass
{
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $companyName;
    /**
     * The streetAddress
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $streetAddress;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $city;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $state;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $zip;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $country;
    /**
     * The formOfPayment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $formOfPayment;
    /**
     * Constructor method for FreightShipmentCODRemitInfo
     * @see parent::__construct()
     * @param string $_companyName
     * @param string $_streetAddress
     * @param string $_city
     * @param string $_state
     * @param string $_zip
     * @param string $_country
     * @param string $_formOfPayment
     * @return SpeedFreightShipmentStructFreightShipmentCODRemitInfo
     */
    public function __construct($_companyName = NULL,$_streetAddress = NULL,$_city = NULL,$_state = NULL,$_zip = NULL,$_country = NULL,$_formOfPayment = NULL)
    {
        parent::__construct(array('companyName'=>$_companyName,'streetAddress'=>$_streetAddress,'city'=>$_city,'state'=>$_state,'zip'=>$_zip,'country'=>$_country,'formOfPayment'=>$_formOfPayment),false);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $_companyName the companyName
     * @return string
     */
    public function setCompanyName($_companyName)
    {
        return ($this->companyName = $_companyName);
    }
    /**
     * Get streetAddress value
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }
    /**
     * Set streetAddress value
     * @param string $_streetAddress the streetAddress
     * @return string
     */
    public function setStreetAddress($_streetAddress)
    {
        return ($this->streetAddress = $_streetAddress);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $_city the city
     * @return string
     */
    public function setCity($_city)
    {
        return ($this->city = $_city);
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $_state the state
     * @return string
     */
    public function setState($_state)
    {
        return ($this->state = $_state);
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $_zip the zip
     * @return string
     */
    public function setZip($_zip)
    {
        return ($this->zip = $_zip);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $_country the country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->country = $_country);
    }
    /**
     * Get formOfPayment value
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return $this->formOfPayment;
    }
    /**
     * Set formOfPayment value
     * @param string $_formOfPayment the formOfPayment
     * @return string
     */
    public function setFormOfPayment($_formOfPayment)
    {
        return ($this->formOfPayment = $_formOfPayment);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentCODRemitInfo
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
