<?php
/**
 * File for class SpeedFreightShipmentServiceBook
 * @package SpeedFreightShipment
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentServiceBook originally named Book
 * @package SpeedFreightShipment
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentServiceBook extends SpeedFreightShipmentWsdlClass
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
     * Method to call the operation originally named bookSpeedFreightShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : AuthenticationToken
     * - SOAPHeaderNamespaces : http://www.wwexship.com
     * - SOAPHeaderTypes : {@link SpeedFreightShipmentStructAuthenticationToken}
     * - SOAPHeaders : required
     * @uses SpeedFreightShipmentWsdlClass::getSoapClient()
     * @uses SpeedFreightShipmentWsdlClass::setResult()
     * @uses SpeedFreightShipmentWsdlClass::saveLastError()
     * @param SpeedFreightShipmentStructBookSpeedFreightShipment $_speedFreightShipmentStructBookSpeedFreightShipment
     * @return SpeedFreightShipmentStructBookSpeedFreightShipmentResponse
     */
    public function bookSpeedFreightShipment(SpeedFreightShipmentStructBookSpeedFreightShipment $_speedFreightShipmentStructBookSpeedFreightShipment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->bookSpeedFreightShipment($_speedFreightShipmentStructBookSpeedFreightShipment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedFreightShipmentWsdlClass::getResult()
     * @return SpeedFreightShipmentStructBookSpeedFreightShipmentResponse
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
