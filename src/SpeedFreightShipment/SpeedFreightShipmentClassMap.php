<?php
/**
 * File for the class which returns the class map definition
 * @package SpeedFreightShipment
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * Class which returns the class map definition by the static method SpeedFreightShipmentClassMap::classMap()
 * @package SpeedFreightShipment
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
class SpeedFreightShipmentClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'ArrayOfFreightShipmentBOLLabel' => 'SpeedFreightShipmentStructArrayOfFreightShipmentBOLLabel',
  'ArrayOfFreightShipmentBOLNumber' => 'SpeedFreightShipmentStructArrayOfFreightShipmentBOLNumber',
  'ArrayOfFreightShipmentCarrierNotification' => 'SpeedFreightShipmentStructArrayOfFreightShipmentCarrierNotification',
  'ArrayOfFreightShipmentErrorDescription' => 'SpeedFreightShipmentStructArrayOfFreightShipmentErrorDescription',
  'ArrayOfFreightShipmentInsurenceCertificate' => 'SpeedFreightShipmentStructArrayOfFreightShipmentInsurenceCertificate',
  'ArrayOfFreightShipmentNotification' => 'SpeedFreightShipmentStructArrayOfFreightShipmentNotification',
  'ArrayOfFreightShipmentProNumberResult' => 'SpeedFreightShipmentStructArrayOfFreightShipmentProNumberResult',
  'ArrayOfFreightShipmentQuoteResult' => 'SpeedFreightShipmentStructArrayOfFreightShipmentQuoteResult',
  'ArrayOfFreightShipmentReference' => 'SpeedFreightShipmentStructArrayOfFreightShipmentReference',
  'ArrayOfFreightShipmentVoidResult' => 'SpeedFreightShipmentStructArrayOfFreightShipmentVoidResult',
  'ArrayOfWSHandlingUnit' => 'SpeedFreightShipmentStructArrayOfWSHandlingUnit',
  'ArrayOfWSLineItem' => 'SpeedFreightShipmentStructArrayOfWSLineItem',
  'AuthenticationToken' => 'Wwex\SpeedFreightShipment\Type\AuthenticationToken',
  'FreightShipmentAddressLabel' => 'SpeedFreightShipmentStructFreightShipmentAddressLabel',
  'FreightShipmentBOLLabel' => 'SpeedFreightShipmentStructFreightShipmentBOLLabel',
  'FreightShipmentBookRequest' => 'SpeedFreightShipmentStructFreightShipmentBookRequest',
  'FreightShipmentBookResponse' => 'SpeedFreightShipmentStructFreightShipmentBookResponse',
  'FreightShipmentCODRemitInfo' => 'SpeedFreightShipmentStructFreightShipmentCODRemitInfo',
  'FreightShipmentCarrierNotification' => 'SpeedFreightShipmentStructFreightShipmentCarrierNotification',
  'FreightShipmentCommodityDetails' => 'SpeedFreightShipmentStructFreightShipmentCommodityDetails',
  'FreightShipmentErrorDescription' => 'SpeedFreightShipmentStructFreightShipmentErrorDescription',
  'FreightShipmentInsuranceDescription' => 'SpeedFreightShipmentStructFreightShipmentInsuranceDescription',
  'FreightShipmentInsuranceDetail' => 'SpeedFreightShipmentStructFreightShipmentInsuranceDetail',
  'FreightShipmentInsurenceCertificate' => 'SpeedFreightShipmentStructFreightShipmentInsurenceCertificate',
  'FreightShipmentNotification' => 'SpeedFreightShipmentStructFreightShipmentNotification',
  'FreightShipmentProNumberRequest' => 'SpeedFreightShipmentStructFreightShipmentProNumberRequest',
  'FreightShipmentProNumberResponse' => 'SpeedFreightShipmentStructFreightShipmentProNumberResponse',
  'FreightShipmentProNumberResult' => 'SpeedFreightShipmentStructFreightShipmentProNumberResult',
  'FreightShipmentQuoteRequest' => 'SpeedFreightShipmentStructFreightShipmentQuoteRequest',
  'FreightShipmentQuoteResponse' => 'SpeedFreightShipmentStructFreightShipmentQuoteResponse',
  'FreightShipmentQuoteResult' => 'SpeedFreightShipmentStructFreightShipmentQuoteResult',
  'FreightShipmentReceiverDetail' => 'SpeedFreightShipmentStructFreightShipmentReceiverDetail',
  'FreightShipmentReference' => 'SpeedFreightShipmentStructFreightShipmentReference',
  'FreightShipmentSenderDetail' => 'SpeedFreightShipmentStructFreightShipmentSenderDetail',
  'FreightShipmentVoidRequest' => 'SpeedFreightShipmentStructFreightShipmentVoidRequest',
  'FreightShipmentVoidResponse' => 'SpeedFreightShipmentStructFreightShipmentVoidResponse',
  'FreightShipmentVoidResult' => 'SpeedFreightShipmentStructFreightShipmentVoidResult',
  'WSHandlingUnit' => 'SpeedFreightShipmentStructWSHandlingUnit',
  'WSLineItem' => 'SpeedFreightShipmentStructWSLineItem',
  'WSLineItemHazmatInfo' => 'SpeedFreightShipmentStructWSLineItemHazmatInfo',
  'bookSpeedFreightShipment' => 'SpeedFreightShipmentStructBookSpeedFreightShipment',
  'bookSpeedFreightShipmentResponse' => 'SpeedFreightShipmentStructBookSpeedFreightShipmentResponse',
  'getSpeedFreightShipmentProNumber' => 'SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber',
  'getSpeedFreightShipmentProNumberResponse' => 'SpeedFreightShipmentStructGetSpeedFreightShipmentProNumberResponse',
  'quoteSpeedFreightShipment' => 'SpeedFreightShipmentStructQuoteSpeedFreightShipment',
  'quoteSpeedFreightShipmentResponse' => 'SpeedFreightShipmentStructQuoteSpeedFreightShipmentResponse',
  'voidSpeedFreightShipment' => 'SpeedFreightShipmentStructVoidSpeedFreightShipment',
  'voidSpeedFreightShipmentResponse' => 'SpeedFreightShipmentStructVoidSpeedFreightShipmentResponse',
);
    }
}
