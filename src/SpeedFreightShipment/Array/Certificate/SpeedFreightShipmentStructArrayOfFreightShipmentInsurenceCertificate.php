<?php
/**
 * File for class SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate originally named ArrayOfFreightShipmentInsurenceCertificate
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate extends SpeedFreightShipmentWsdlClass
{
    /**
     * The freightShipmentInsurenceCertificate
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public $freightShipmentInsurenceCertificate;
    /**
     * Constructor method for ArrayOfFreightShipmentInsurenceCertificate
     * @see parent::__construct()
     * @param SpeedFreightShipmentStructFreightShipmentInsurenceCertificate $_freightShipmentInsurenceCertificate
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate
     */
    public function __construct($_freightShipmentInsurenceCertificate = NULL)
    {
        parent::__construct(array('freightShipmentInsurenceCertificate'=>$_freightShipmentInsurenceCertificate),false);
    }
    /**
     * Get freightShipmentInsurenceCertificate value
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate|null
     */
    public function getFreightShipmentInsurenceCertificate()
    {
        return $this->freightShipmentInsurenceCertificate;
    }
    /**
     * Set freightShipmentInsurenceCertificate value
     * @param SpeedFreightShipmentStructFreightShipmentInsurenceCertificate $_freightShipmentInsurenceCertificate the freightShipmentInsurenceCertificate
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function setFreightShipmentInsurenceCertificate($_freightShipmentInsurenceCertificate)
    {
        return ($this->freightShipmentInsurenceCertificate = $_freightShipmentInsurenceCertificate);
    }
    /**
     * Returns the current element
     * @see SpeedFreightShipmentWsdlClass::current()
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SpeedFreightShipmentWsdlClass::item()
     * @param int $_index
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SpeedFreightShipmentWsdlClass::first()
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SpeedFreightShipmentWsdlClass::last()
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SpeedFreightShipmentWsdlClass::last()
     * @param int $_offset
     * @return SpeedFreightShipmentStructFreightShipmentInsurenceCertificate
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see SpeedFreightShipmentWsdlClass::getAttributeName()
     * @return string freightShipmentInsurenceCertificate
     */
    public function getAttributeName()
    {
        return 'freightShipmentInsurenceCertificate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate
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
