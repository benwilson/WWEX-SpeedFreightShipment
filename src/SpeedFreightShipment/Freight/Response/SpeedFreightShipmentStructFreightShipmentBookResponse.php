<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentBookResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentBookResponse originally named FreightShipmentBookResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentBookResponse extends SpeedFreightShipmentWsdlClass
{
    /**
     * The responseStatusCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $responseStatusCode;
    /**
     * The responseStatusDescription
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $responseStatusDescription;
    /**
     * The errorDescriptions
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription
     */
    public $errorDescriptions;
    /**
     * The notifications
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentNotification
     */
    public $notifications;
    /**
     * The freightShipmentBOLNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $freightShipmentBOLNumber;
    /**
     * The freightShipmentBOLLabels
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel
     */
    public $freightShipmentBOLLabels;
    /**
     * The freightShipmentInsuranceCertificateId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $freightShipmentInsuranceCertificateId;
    /**
     * The freightShipmentInsuranceCertificates
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate
     */
    public $freightShipmentInsuranceCertificates;
    /**
     * Constructor method for FreightShipmentBookResponse
     * @see parent::__construct()
     * @param string $_responseStatusCode
     * @param string $_responseStatusDescription
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription $_errorDescriptions
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentNotification $_notifications
     * @param string $_freightShipmentBOLNumber
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel $_freightShipmentBOLLabels
     * @param string $_freightShipmentInsuranceCertificateId
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate $_freightShipmentInsuranceCertificates
     * @return SpeedFreightShipmentStructFreightShipmentBookResponse
     */
    public function __construct($_responseStatusCode = NULL,$_responseStatusDescription = NULL,$_errorDescriptions = NULL,$_notifications = NULL,$_freightShipmentBOLNumber = NULL,$_freightShipmentBOLLabels = NULL,$_freightShipmentInsuranceCertificateId = NULL,$_freightShipmentInsuranceCertificates = NULL)
    {
        parent::__construct(array('responseStatusCode'=>$_responseStatusCode,'responseStatusDescription'=>$_responseStatusDescription,'errorDescriptions'=>($_errorDescriptions instanceof SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription)?$_errorDescriptions:new SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription($_errorDescriptions),'notifications'=>($_notifications instanceof SpeedFreightShipmentStructArrayOfFreightShipmentNotification)?$_notifications:new SpeedFreightShipmentStructArrayOfFreightShipmentNotification($_notifications),'freightShipmentBOLNumber'=>$_freightShipmentBOLNumber,'freightShipmentBOLLabels'=>($_freightShipmentBOLLabels instanceof SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel)?$_freightShipmentBOLLabels:new SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel($_freightShipmentBOLLabels),'freightShipmentInsuranceCertificateId'=>$_freightShipmentInsuranceCertificateId,'freightShipmentInsuranceCertificates'=>($_freightShipmentInsuranceCertificates instanceof SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate)?$_freightShipmentInsuranceCertificates:new SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate($_freightShipmentInsuranceCertificates)),false);
    }
    /**
     * Get responseStatusCode value
     * @return string|null
     */
    public function getResponseStatusCode()
    {
        return $this->responseStatusCode;
    }
    /**
     * Set responseStatusCode value
     * @param string $_responseStatusCode the responseStatusCode
     * @return string
     */
    public function setResponseStatusCode($_responseStatusCode)
    {
        return ($this->responseStatusCode = $_responseStatusCode);
    }
    /**
     * Get responseStatusDescription value
     * @return string|null
     */
    public function getResponseStatusDescription()
    {
        return $this->responseStatusDescription;
    }
    /**
     * Set responseStatusDescription value
     * @param string $_responseStatusDescription the responseStatusDescription
     * @return string
     */
    public function setResponseStatusDescription($_responseStatusDescription)
    {
        return ($this->responseStatusDescription = $_responseStatusDescription);
    }
    /**
     * Get errorDescriptions value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription|null
     */
    public function getErrorDescriptions()
    {
        return $this->errorDescriptions;
    }
    /**
     * Set errorDescriptions value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription $_errorDescriptions the errorDescriptions
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription
     */
    public function setErrorDescriptions($_errorDescriptions)
    {
        return ($this->errorDescriptions = $_errorDescriptions);
    }
    /**
     * Get notifications value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentNotification|null
     */
    public function getNotifications()
    {
        return $this->notifications;
    }
    /**
     * Set notifications value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentNotification $_notifications the notifications
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentNotification
     */
    public function setNotifications($_notifications)
    {
        return ($this->notifications = $_notifications);
    }
    /**
     * Get freightShipmentBOLNumber value
     * @return string|null
     */
    public function getFreightShipmentBOLNumber()
    {
        return $this->freightShipmentBOLNumber;
    }
    /**
     * Set freightShipmentBOLNumber value
     * @param string $_freightShipmentBOLNumber the freightShipmentBOLNumber
     * @return string
     */
    public function setFreightShipmentBOLNumber($_freightShipmentBOLNumber)
    {
        return ($this->freightShipmentBOLNumber = $_freightShipmentBOLNumber);
    }
    /**
     * Get freightShipmentBOLLabels value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel|null
     */
    public function getFreightShipmentBOLLabels()
    {
        return $this->freightShipmentBOLLabels;
    }
    /**
     * Set freightShipmentBOLLabels value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel $_freightShipmentBOLLabels the freightShipmentBOLLabels
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel
     */
    public function setFreightShipmentBOLLabels($_freightShipmentBOLLabels)
    {
        return ($this->freightShipmentBOLLabels = $_freightShipmentBOLLabels);
    }
    /**
     * Get freightShipmentInsuranceCertificateId value
     * @return string|null
     */
    public function getFreightShipmentInsuranceCertificateId()
    {
        return $this->freightShipmentInsuranceCertificateId;
    }
    /**
     * Set freightShipmentInsuranceCertificateId value
     * @param string $_freightShipmentInsuranceCertificateId the freightShipmentInsuranceCertificateId
     * @return string
     */
    public function setFreightShipmentInsuranceCertificateId($_freightShipmentInsuranceCertificateId)
    {
        return ($this->freightShipmentInsuranceCertificateId = $_freightShipmentInsuranceCertificateId);
    }
    /**
     * Get freightShipmentInsuranceCertificates value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate|null
     */
    public function getFreightShipmentInsuranceCertificates()
    {
        return $this->freightShipmentInsuranceCertificates;
    }
    /**
     * Set freightShipmentInsuranceCertificates value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate $_freightShipmentInsuranceCertificates the freightShipmentInsuranceCertificates
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate
     */
    public function setFreightShipmentInsuranceCertificates($_freightShipmentInsuranceCertificates)
    {
        return ($this->freightShipmentInsuranceCertificates = $_freightShipmentInsuranceCertificates);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentBookResponse
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
