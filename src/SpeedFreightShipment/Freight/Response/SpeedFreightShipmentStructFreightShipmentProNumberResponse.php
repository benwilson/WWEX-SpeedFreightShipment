<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentProNumberResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentProNumberResponse originally named FreightShipmentProNumberResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentProNumberResponse extends SpeedFreightShipmentWsdlClass
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
     * The freightShipmentProNumberResults
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult
     */
    public $freightShipmentProNumberResults;
    /**
     * Constructor method for FreightShipmentProNumberResponse
     * @see parent::__construct()
     * @param string $_responseStatusCode
     * @param string $_responseStatusDescription
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription $_errorDescriptions
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult $_freightShipmentProNumberResults
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResponse
     */
    public function __construct($_responseStatusCode = NULL,$_responseStatusDescription = NULL,$_errorDescriptions = NULL,$_freightShipmentProNumberResults = NULL)
    {
        parent::__construct(array('responseStatusCode'=>$_responseStatusCode,'responseStatusDescription'=>$_responseStatusDescription,'errorDescriptions'=>($_errorDescriptions instanceof SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription)?$_errorDescriptions:new SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription($_errorDescriptions),'freightShipmentProNumberResults'=>($_freightShipmentProNumberResults instanceof SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult)?$_freightShipmentProNumberResults:new SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult($_freightShipmentProNumberResults)),false);
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
     * Get freightShipmentProNumberResults value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult|null
     */
    public function getFreightShipmentProNumberResults()
    {
        return $this->freightShipmentProNumberResults;
    }
    /**
     * Set freightShipmentProNumberResults value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult $_freightShipmentProNumberResults the freightShipmentProNumberResults
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult
     */
    public function setFreightShipmentProNumberResults($_freightShipmentProNumberResults)
    {
        return ($this->freightShipmentProNumberResults = $_freightShipmentProNumberResults);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentProNumberResponse
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
