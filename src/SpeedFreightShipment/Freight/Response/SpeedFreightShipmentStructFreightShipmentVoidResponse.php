<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentVoidResponse
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentVoidResponse originally named FreightShipmentVoidResponse
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentVoidResponse extends SpeedFreightShipmentWsdlClass
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
     * The freightShipmentVoidResults
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult
     */
    public $freightShipmentVoidResults;
    /**
     * Constructor method for FreightShipmentVoidResponse
     * @see parent::__construct()
     * @param string $_responseStatusCode
     * @param string $_responseStatusDescription
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription $_errorDescriptions
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult $_freightShipmentVoidResults
     * @return SpeedFreightShipmentStructFreightShipmentVoidResponse
     */
    public function __construct($_responseStatusCode = NULL,$_responseStatusDescription = NULL,$_errorDescriptions = NULL,$_freightShipmentVoidResults = NULL)
    {
        parent::__construct(array('responseStatusCode'=>$_responseStatusCode,'responseStatusDescription'=>$_responseStatusDescription,'errorDescriptions'=>($_errorDescriptions instanceof SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription)?$_errorDescriptions:new SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription($_errorDescriptions),'freightShipmentVoidResults'=>($_freightShipmentVoidResults instanceof SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult)?$_freightShipmentVoidResults:new SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult($_freightShipmentVoidResults)),false);
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
     * Get freightShipmentVoidResults value
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult|null
     */
    public function getFreightShipmentVoidResults()
    {
        return $this->freightShipmentVoidResults;
    }
    /**
     * Set freightShipmentVoidResults value
     * @param SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult $_freightShipmentVoidResults the freightShipmentVoidResults
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult
     */
    public function setFreightShipmentVoidResults($_freightShipmentVoidResults)
    {
        return ($this->freightShipmentVoidResults = $_freightShipmentVoidResults);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentVoidResponse
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
