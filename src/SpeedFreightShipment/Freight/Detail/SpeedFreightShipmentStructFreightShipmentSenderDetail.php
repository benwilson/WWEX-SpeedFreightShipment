<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentSenderDetail
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentSenderDetail originally named FreightShipmentSenderDetail
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentSenderDetail extends SpeedFreightShipmentWsdlClass
{
    /**
     * The senderCompanyName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderCompanyName;
    /**
     * The senderAddressLine1
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderAddressLine1;
    /**
     * The senderAddressLine2
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderAddressLine2;
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
     * The senderPhone
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderPhone;
    /**
     * The senderContact
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderContact;
    /**
     * The emailBOLToSender
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $emailBOLToSender;
    /**
     * The senderEmailAddess
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $senderEmailAddess;
    /**
     * Constructor method for FreightShipmentSenderDetail
     * @see parent::__construct()
     * @param string $_senderCompanyName
     * @param string $_senderAddressLine1
     * @param string $_senderAddressLine2
     * @param string $_senderCity
     * @param string $_senderState
     * @param string $_senderZip
     * @param string $_senderCountryCode
     * @param string $_senderPhone
     * @param string $_senderContact
     * @param string $_emailBOLToSender
     * @param string $_senderEmailAddess
     * @return SpeedFreightShipmentStructFreightShipmentSenderDetail
     */
    public function __construct($_senderCompanyName = NULL,$_senderAddressLine1 = NULL,$_senderAddressLine2 = NULL,$_senderCity = NULL,$_senderState = NULL,$_senderZip = NULL,$_senderCountryCode = NULL,$_senderPhone = NULL,$_senderContact = NULL,$_emailBOLToSender = NULL,$_senderEmailAddess = NULL)
    {
        parent::__construct(array('senderCompanyName'=>$_senderCompanyName,'senderAddressLine1'=>$_senderAddressLine1,'senderAddressLine2'=>$_senderAddressLine2,'senderCity'=>$_senderCity,'senderState'=>$_senderState,'senderZip'=>$_senderZip,'senderCountryCode'=>$_senderCountryCode,'senderPhone'=>$_senderPhone,'senderContact'=>$_senderContact,'emailBOLToSender'=>$_emailBOLToSender,'senderEmailAddess'=>$_senderEmailAddess),false);
    }
    /**
     * Get senderCompanyName value
     * @return string|null
     */
    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }
    /**
     * Set senderCompanyName value
     * @param string $_senderCompanyName the senderCompanyName
     * @return string
     */
    public function setSenderCompanyName($_senderCompanyName)
    {
        return ($this->senderCompanyName = $_senderCompanyName);
    }
    /**
     * Get senderAddressLine1 value
     * @return string|null
     */
    public function getSenderAddressLine1()
    {
        return $this->senderAddressLine1;
    }
    /**
     * Set senderAddressLine1 value
     * @param string $_senderAddressLine1 the senderAddressLine1
     * @return string
     */
    public function setSenderAddressLine1($_senderAddressLine1)
    {
        return ($this->senderAddressLine1 = $_senderAddressLine1);
    }
    /**
     * Get senderAddressLine2 value
     * @return string|null
     */
    public function getSenderAddressLine2()
    {
        return $this->senderAddressLine2;
    }
    /**
     * Set senderAddressLine2 value
     * @param string $_senderAddressLine2 the senderAddressLine2
     * @return string
     */
    public function setSenderAddressLine2($_senderAddressLine2)
    {
        return ($this->senderAddressLine2 = $_senderAddressLine2);
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
     * Get senderPhone value
     * @return string|null
     */
    public function getSenderPhone()
    {
        return $this->senderPhone;
    }
    /**
     * Set senderPhone value
     * @param string $_senderPhone the senderPhone
     * @return string
     */
    public function setSenderPhone($_senderPhone)
    {
        return ($this->senderPhone = $_senderPhone);
    }
    /**
     * Get senderContact value
     * @return string|null
     */
    public function getSenderContact()
    {
        return $this->senderContact;
    }
    /**
     * Set senderContact value
     * @param string $_senderContact the senderContact
     * @return string
     */
    public function setSenderContact($_senderContact)
    {
        return ($this->senderContact = $_senderContact);
    }
    /**
     * Get emailBOLToSender value
     * @return string|null
     */
    public function getEmailBOLToSender()
    {
        return $this->emailBOLToSender;
    }
    /**
     * Set emailBOLToSender value
     * @param string $_emailBOLToSender the emailBOLToSender
     * @return string
     */
    public function setEmailBOLToSender($_emailBOLToSender)
    {
        return ($this->emailBOLToSender = $_emailBOLToSender);
    }
    /**
     * Get senderEmailAddess value
     * @return string|null
     */
    public function getSenderEmailAddess()
    {
        return $this->senderEmailAddess;
    }
    /**
     * Set senderEmailAddess value
     * @param string $_senderEmailAddess the senderEmailAddess
     * @return string
     */
    public function setSenderEmailAddess($_senderEmailAddess)
    {
        return ($this->senderEmailAddess = $_senderEmailAddess);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentSenderDetail
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
