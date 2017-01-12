<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentReceiverDetail
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentReceiverDetail originally named FreightShipmentReceiverDetail
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentReceiverDetail extends SpeedFreightShipmentWsdlClass
{
    /**
     * The receiverCompanyName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverCompanyName;
    /**
     * The receiverAddressLine1
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverAddressLine1;
    /**
     * The receiverAddressLine2
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverAddressLine2;
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
     * The receiverPhone
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverPhone;
    /**
     * The receiverContact
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverContact;
    /**
     * The emailBOLToReceiver
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $emailBOLToReceiver;
    /**
     * The receiverEmailAddess
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverEmailAddess;
    /**
     * The billToReceiver
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $billToReceiver;
    /**
     * The receiverAccountNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receiverAccountNumber;
    /**
     * Constructor method for FreightShipmentReceiverDetail
     * @see parent::__construct()
     * @param string $_receiverCompanyName
     * @param string $_receiverAddressLine1
     * @param string $_receiverAddressLine2
     * @param string $_receiverCity
     * @param string $_receiverState
     * @param string $_receiverZip
     * @param string $_receiverCountryCode
     * @param string $_receiverPhone
     * @param string $_receiverContact
     * @param string $_emailBOLToReceiver
     * @param string $_receiverEmailAddess
     * @param string $_billToReceiver
     * @param string $_receiverAccountNumber
     * @return SpeedFreightShipmentStructFreightShipmentReceiverDetail
     */
    public function __construct($_receiverCompanyName = NULL,$_receiverAddressLine1 = NULL,$_receiverAddressLine2 = NULL,$_receiverCity = NULL,$_receiverState = NULL,$_receiverZip = NULL,$_receiverCountryCode = NULL,$_receiverPhone = NULL,$_receiverContact = NULL,$_emailBOLToReceiver = NULL,$_receiverEmailAddess = NULL,$_billToReceiver = NULL,$_receiverAccountNumber = NULL)
    {
        parent::__construct(array('receiverCompanyName'=>$_receiverCompanyName,'receiverAddressLine1'=>$_receiverAddressLine1,'receiverAddressLine2'=>$_receiverAddressLine2,'receiverCity'=>$_receiverCity,'receiverState'=>$_receiverState,'receiverZip'=>$_receiverZip,'receiverCountryCode'=>$_receiverCountryCode,'receiverPhone'=>$_receiverPhone,'receiverContact'=>$_receiverContact,'emailBOLToReceiver'=>$_emailBOLToReceiver,'receiverEmailAddess'=>$_receiverEmailAddess,'billToReceiver'=>$_billToReceiver,'receiverAccountNumber'=>$_receiverAccountNumber),false);
    }
    /**
     * Get receiverCompanyName value
     * @return string|null
     */
    public function getReceiverCompanyName()
    {
        return $this->receiverCompanyName;
    }
    /**
     * Set receiverCompanyName value
     * @param string $_receiverCompanyName the receiverCompanyName
     * @return string
     */
    public function setReceiverCompanyName($_receiverCompanyName)
    {
        return ($this->receiverCompanyName = $_receiverCompanyName);
    }
    /**
     * Get receiverAddressLine1 value
     * @return string|null
     */
    public function getReceiverAddressLine1()
    {
        return $this->receiverAddressLine1;
    }
    /**
     * Set receiverAddressLine1 value
     * @param string $_receiverAddressLine1 the receiverAddressLine1
     * @return string
     */
    public function setReceiverAddressLine1($_receiverAddressLine1)
    {
        return ($this->receiverAddressLine1 = $_receiverAddressLine1);
    }
    /**
     * Get receiverAddressLine2 value
     * @return string|null
     */
    public function getReceiverAddressLine2()
    {
        return $this->receiverAddressLine2;
    }
    /**
     * Set receiverAddressLine2 value
     * @param string $_receiverAddressLine2 the receiverAddressLine2
     * @return string
     */
    public function setReceiverAddressLine2($_receiverAddressLine2)
    {
        return ($this->receiverAddressLine2 = $_receiverAddressLine2);
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
     * Get receiverPhone value
     * @return string|null
     */
    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }
    /**
     * Set receiverPhone value
     * @param string $_receiverPhone the receiverPhone
     * @return string
     */
    public function setReceiverPhone($_receiverPhone)
    {
        return ($this->receiverPhone = $_receiverPhone);
    }
    /**
     * Get receiverContact value
     * @return string|null
     */
    public function getReceiverContact()
    {
        return $this->receiverContact;
    }
    /**
     * Set receiverContact value
     * @param string $_receiverContact the receiverContact
     * @return string
     */
    public function setReceiverContact($_receiverContact)
    {
        return ($this->receiverContact = $_receiverContact);
    }
    /**
     * Get emailBOLToReceiver value
     * @return string|null
     */
    public function getEmailBOLToReceiver()
    {
        return $this->emailBOLToReceiver;
    }
    /**
     * Set emailBOLToReceiver value
     * @param string $_emailBOLToReceiver the emailBOLToReceiver
     * @return string
     */
    public function setEmailBOLToReceiver($_emailBOLToReceiver)
    {
        return ($this->emailBOLToReceiver = $_emailBOLToReceiver);
    }
    /**
     * Get receiverEmailAddess value
     * @return string|null
     */
    public function getReceiverEmailAddess()
    {
        return $this->receiverEmailAddess;
    }
    /**
     * Set receiverEmailAddess value
     * @param string $_receiverEmailAddess the receiverEmailAddess
     * @return string
     */
    public function setReceiverEmailAddess($_receiverEmailAddess)
    {
        return ($this->receiverEmailAddess = $_receiverEmailAddess);
    }
    /**
     * Get billToReceiver value
     * @return string|null
     */
    public function getBillToReceiver()
    {
        return $this->billToReceiver;
    }
    /**
     * Set billToReceiver value
     * @param string $_billToReceiver the billToReceiver
     * @return string
     */
    public function setBillToReceiver($_billToReceiver)
    {
        return ($this->billToReceiver = $_billToReceiver);
    }
    /**
     * Get receiverAccountNumber value
     * @return string|null
     */
    public function getReceiverAccountNumber()
    {
        return $this->receiverAccountNumber;
    }
    /**
     * Set receiverAccountNumber value
     * @param string $_receiverAccountNumber the receiverAccountNumber
     * @return string
     */
    public function setReceiverAccountNumber($_receiverAccountNumber)
    {
        return ($this->receiverAccountNumber = $_receiverAccountNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentReceiverDetail
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
