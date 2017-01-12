<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentInsurenceCertificate originally named FreightShipmentInsurenceCertificate
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentInsurenceCertificate extends SpeedFreightShipmentWsdlClass
{
    /**
     * The base64InsuranceCertificate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $base64InsuranceCertificate;
    /**
     * Constructor method for FreightShipmentInsurenceCertificate
     * @see parent::__construct()
     * @param string $_base64InsuranceCertificate
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function __construct($_base64InsuranceCertificate = NULL)
    {
        parent::__construct(array('base64InsuranceCertificate'=>$_base64InsuranceCertificate),false);
    }
    /**
     * Get base64InsuranceCertificate value
     * @return string|null
     */
    public function getBase64InsuranceCertificate()
    {
        return $this->base64InsuranceCertificate;
    }
    /**
     * Set base64InsuranceCertificate value
     * @param string $_base64InsuranceCertificate the base64InsuranceCertificate
     * @return string
     */
    public function setBase64InsuranceCertificate($_base64InsuranceCertificate)
    {
        return ($this->base64InsuranceCertificate = $_base64InsuranceCertificate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
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
