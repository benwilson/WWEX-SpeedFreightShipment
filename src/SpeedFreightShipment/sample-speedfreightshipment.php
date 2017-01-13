<?php
/**
 * Test with SpeedFreightShipment for 'var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml'
 * @package SpeedFreightShipment
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-04
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/SpeedFreightShipmentAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a SpeedFreightShipmentWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[SpeedFreightShipmentWsdlClass::WSDL_URL] = 'var/wsdltophp.com/storage/wsdls/35165-07413ab26bb23f8884bc8617c9846509/wsdl.xml';
 * $wsdl[SpeedFreightShipmentWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[SpeedFreightShipmentWsdlClass::WSDL_TRACE] = true;
 * $wsdl[SpeedFreightShipmentWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[SpeedFreightShipmentWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new SpeedFreightShipmentWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**********************************************
 * Example for SpeedFreightShipmentServiceQuote
 */
$speedFreightShipmentServiceQuote = new SpeedFreightShipmentServiceQuote();
// sample call for SpeedFreightShipmentServiceQuote::setSoapHeaderAuthenticationToken() in order to initialize required SoapHeader
$speedFreightShipmentStructAuthenticationToken = new SpeedFreightShipmentStructAuthenticationToken( array(
		'loginId'       => 'LOGINID',
		'password'      => 'PASSWORD',
		'licenseKey'    => 'LICENSEKEY',
		'accountNumber' => 'ACCOUNTNUMBER' ) );
$speedFreightShipmentServiceQuote->setSoapHeaderAuthenticationToken( $speedFreightShipmentStructAuthenticationToken );
// sample sender and receiver
$structFreightShipmentQuoteRequest = new SpeedFreightShipmentStructFreightShipmentQuoteRequest();
$structFreightShipmentQuoteRequest->setSenderState( 'DE' );
$structFreightShipmentQuoteRequest->setSenderZip( '19808' );
$structFreightShipmentQuoteRequest->setReceiverState( 'DC' );
$structFreightShipmentQuoteRequest->setReceiverZip( '20252' );
// sample array of line item
$lineItemDetails = array(
		new SpeedFreightShipmentStructWSLineItem( 50, 50, 'test line item' ) );
// sample array of handling units
$wsHandlingUnit = array(
		new SpeedFreightShipmentStructWSHandlingUnit( 'BOX', 1, NULL, NULL, NULL, $lineItemDetails ) );
$handlingUnitDetails = new SpeedFreightShipmentStructArrayOfWSHandlingUnit( $wsHandlingUnit );
// sample commodity details
$commdityDetails = new SpeedFreightShipmentStructFreightShipmentCommodityDetails( 'n', $handlingUnitDetails );
$structFreightShipmentQuoteRequest->setCommdityDetails( $commdityDetails );
// sample shipment
$shipment = new SpeedFreightShipmentStructQuoteSpeedFreightShipment( $structFreightShipmentQuoteRequest );
// sample call for SpeedFreightShipmentServiceQuote::quoteSpeedFreightShipment()
if ( $speedFreightShipmentServiceQuote->quoteSpeedFreightShipment( $shipment ) ) {
	print_r( $speedFreightShipmentServiceQuote->getResult() );
} else {
	print_r( $speedFreightShipmentServiceQuote->getLastError() );
}

/*********************************************
 * Example for SpeedFreightShipmentServiceBook
 */
$speedFreightShipmentServiceBook = new SpeedFreightShipmentServiceBook();
// sample call for SpeedFreightShipmentServiceBook::setSoapHeaderAuthenticationToken() in order to initialize required SoapHeader
$speedFreightShipmentServiceBook->setSoapHeaderAuthenticationToken(new SpeedFreightShipmentStructAuthenticationToken(/*** update parameters list ***/));
// sample call for SpeedFreightShipmentServiceBook::bookSpeedFreightShipment()
if($speedFreightShipmentServiceBook->bookSpeedFreightShipment(new SpeedFreightShipmentStructBookSpeedFreightShipment(/*** update parameters list ***/)))
    print_r($speedFreightShipmentServiceBook->getResult());
else
    print_r($speedFreightShipmentServiceBook->getLastError());

/*********************************************
 * Example for SpeedFreightShipmentServiceVoid
 */
$speedFreightShipmentServiceVoid = new SpeedFreightShipmentServiceVoid();
// sample call for SpeedFreightShipmentServiceVoid::setSoapHeaderAuthenticationToken() in order to initialize required SoapHeader
$speedFreightShipmentServiceVoid->setSoapHeaderAuthenticationToken(new SpeedFreightShipmentStructAuthenticationToken(/*** update parameters list ***/));
// sample call for SpeedFreightShipmentServiceVoid::voidSpeedFreightShipment()
if($speedFreightShipmentServiceVoid->voidSpeedFreightShipment(new SpeedFreightShipmentStructVoidSpeedFreightShipment(/*** update parameters list ***/)))
    print_r($speedFreightShipmentServiceVoid->getResult());
else
    print_r($speedFreightShipmentServiceVoid->getLastError());

/********************************************
 * Example for SpeedFreightShipmentServiceGet
 */
$speedFreightShipmentServiceGet = new SpeedFreightShipmentServiceGet();
// sample call for SpeedFreightShipmentServiceGet::setSoapHeaderAuthenticationToken() in order to initialize required SoapHeader
$speedFreightShipmentServiceGet->setSoapHeaderAuthenticationToken(new SpeedFreightShipmentStructAuthenticationToken(/*** update parameters list ***/));
// sample call for SpeedFreightShipmentServiceGet::getSpeedFreightShipmentProNumber()
if($speedFreightShipmentServiceGet->getSpeedFreightShipmentProNumber(new SpeedFreightShipmentStructGetSpeedFreightShipmentProNumber(/*** update parameters list ***/)))
    print_r($speedFreightShipmentServiceGet->getResult());
else
    print_r($speedFreightShipmentServiceGet->getLastError());
