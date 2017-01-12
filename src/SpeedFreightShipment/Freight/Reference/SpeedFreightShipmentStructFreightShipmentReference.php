<?php
/**
 * File for class SpeedFreightShipmentStructFreightShipmentReference
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for SpeedFreightShipmentStructFreightShipmentReference originally named FreightShipmentReference
 * Meta informations extracted from the WSDL
 * - from schema : var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml
 * @package SpeedFreightShipment
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentStructFreightShipmentReference extends SpeedFreightShipmentWsdlClass
{
    /**
     * The referenceDescription
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $referenceDescription;
    /**
     * The referenceType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $referenceType;
    /**
     * The referencePackageNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $referencePackageNumber;
    /**
     * Constructor method for FreightShipmentReference
     * @see parent::__construct()
     * @param string $_referenceDescription
     * @param string $_referenceType
     * @param string $_referencePackageNumber
     * @return SpeedFreightShipmentStructFreightShipmentReference
     */
    public function __construct($_referenceDescription = NULL,$_referenceType = NULL,$_referencePackageNumber = NULL)
    {
        parent::__construct(array('referenceDescription'=>$_referenceDescription,'referenceType'=>$_referenceType,'referencePackageNumber'=>$_referencePackageNumber),false);
    }
    /**
     * Get referenceDescription value
     * @return string|null
     */
    public function getReferenceDescription()
    {
        return $this->referenceDescription;
    }
    /**
     * Set referenceDescription value
     * @param string $_referenceDescription the referenceDescription
     * @return string
     */
    public function setReferenceDescription($_referenceDescription)
    {
        return ($this->referenceDescription = $_referenceDescription);
    }
    /**
     * Get referenceType value
     * @return string|null
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }
    /**
     * Set referenceType value
     * @param string $_referenceType the referenceType
     * @return string
     */
    public function setReferenceType($_referenceType)
    {
        return ($this->referenceType = $_referenceType);
    }
    /**
     * Get referencePackageNumber value
     * @return string|null
     */
    public function getReferencePackageNumber()
    {
        return $this->referencePackageNumber;
    }
    /**
     * Set referencePackageNumber value
     * @param string $_referencePackageNumber the referencePackageNumber
     * @return string
     */
    public function setReferencePackageNumber($_referencePackageNumber)
    {
        return ($this->referencePackageNumber = $_referencePackageNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedFreightShipmentWsdlClass::__set_state()
     * @uses SpeedFreightShipmentWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedFreightShipmentStructFreightShipmentReference
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
