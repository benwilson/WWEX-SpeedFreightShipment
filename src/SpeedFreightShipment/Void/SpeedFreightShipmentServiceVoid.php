<?php

use Wwex\SpeedFreightShipment\Type\AuthenticationToken;

/**
 * File for class SpeedFreightShipmentServiceVoid
 * @package SpeedFreightShipment
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentServiceVoid originally named Void
 * @package SpeedFreightShipment
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentServiceVoid extends SpeedFreightShipmentWsdlClass
{
    /**
     * Sets the AuthenticationToken SoapHeader param
     * @uses SpeedFreightShipmentWsdlClass::setSoapHeader()
     * @param AuthenticationToken $_speedFreightShipmentStructAuthenticationToken
     * @param string $_nameSpace http://www.wwexship.com
     * @param bool $_mustUnderstand
     * @param string $_actor
     * @return bool true|false
     */
    public function setSoapHeaderAuthenticationToken(AuthenticationToken $_speedFreightShipmentStructAuthenticationToken,$_nameSpace = 'http://www.wwexship.com',$_mustUnderstand = false,$_actor = null)
    {
        return $this->setSoapHeader($_nameSpace,'AuthenticationToken',$_speedFreightShipmentStructAuthenticationToken,$_mustUnderstand,$_actor);
    }
    /**
     * Method to call the operation originally named voidSpeedFreightShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : {@link AuthenticationToken}
     * - SOAPHeaders : required
     * @uses SpeedFreightShipmentWsdlClass::getSoapClient()
     * @uses SpeedFreightShipmentWsdlClass::setResult()
     * @uses SpeedFreightShipmentWsdlClass::saveLastError()
     * @param SpeedFreightShipmentStructVoidSpeedFreightShipment $_speedFreightShipmentStructVoidSpeedFreightShipment
     * @return SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse
     */
    public function voidSpeedFreightShipment(SpeedFreightShipmentStructVoidSpeedFreightShipment $_speedFreightShipmentStructVoidSpeedFreightShipment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->voidSpeedFreightShipment($_speedFreightShipmentStructVoidSpeedFreightShipment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedFreightShipmentWsdlClass::getResult()
     * @return SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse
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
