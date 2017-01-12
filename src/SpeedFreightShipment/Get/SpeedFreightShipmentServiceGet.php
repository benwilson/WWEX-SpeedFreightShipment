<?php
/**
 * File for class SpeedFreightShipmentServiceGet
 * @package SpeedFreightShipment
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentServiceGet originally named Get
 * @package SpeedFreightShipment
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentServiceGet extends SpeedFreightShipmentWsdlClass
{
    /**
     * Sets the AuthenticationToken SoapHeader param
     * @uses SpeedFreightShipmentWsdlClass::setSoapHeader()
     * @param SpeedFreightShipmentStructAuthenticationToken $_speedFreightShipmentStructAuthenticationToken
     * @param string $_nameSpace http://www.wwexship.com
     * @param bool $_mustUnderstand
     * @param string $_actor
     * @return bool true|false
     */
    public function setSoapHeaderAuthenticationToken(SpeedFreightShipmentStructAuthenticationToken $_speedFreightShipmentStructAuthenticationToken,$_nameSpace = 'http://www.wwexship.com',$_mustUnderstand = false,$_actor = null)
    {
        return $this->setSoapHeader($_nameSpace,'AuthenticationToken',$_speedFreightShipmentStructAuthenticationToken,$_mustUnderstand,$_actor);
    }
    /**
     * Method to call the operation originally named getSpeedFreightShipmentProNumber
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : {@link SpeedFreightShipmentStructAuthenticationToken}
     * - SOAPHeaders : required
     * @uses SpeedFreightShipmentWsdlClass::getSoapClient()
     * @uses SpeedFreightShipmentWsdlClass::setResult()
     * @uses SpeedFreightShipmentWsdlClass::saveLastError()
     * @param SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber $_speedFreightShipmentStructGetSpeedFreightShipmentProNumber
     * @return SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse
     */
    public function getSpeedFreightShipmentProNumber(SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber $_speedFreightShipmentStructGetSpeedFreightShipmentProNumber)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSpeedFreightShipmentProNumber($_speedFreightShipmentStructGetSpeedFreightShipmentProNumber));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedFreightShipmentWsdlClass::getResult()
     * @return SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
