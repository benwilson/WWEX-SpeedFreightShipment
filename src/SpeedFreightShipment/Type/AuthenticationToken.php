<?php

namespace Wwex\SpeedFreightShipment\Type;

/**
 * AuthenticationToken
 *
 * @author        Ben Wilson
 * @link          https://github.com/benwilson
 * @package       SpeedFreightShipment
 * @subpackage    Type
 *
 */
class AuthenticationToken
{
    /**
     * The loginId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $loginId;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $password;
    /**
     * The licenseKey
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $licenseKey;
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $accountNumber;
    /**
     * Constructor method for AuthenticationToken
     * @param string|array $_loginId loginId string or array of 'loginId', 'password', 'licenseKey', 'accountNumber'
     * @param string $_password
     * @param string $_licenseKey
     * @param string $_accountNumber
     * @return AuthenticationToken
     */
    public function __construct($_loginId = NULL,$_password = NULL,$_licenseKey = NULL,$_accountNumber = NULL) {
	    $properties = array(
			    'loginId'       => $_loginId,
			    'password'      => $_password,
			    'licenseKey'    => $_licenseKey,
			    'accountNumber' => $_accountNumber );
	    if ( is_array( $_loginId ) ) {
		    $properties = array_merge( $properties, $_loginId );
	    }
	    foreach ( $properties as $k => $v ) {
		    $setMethod = 'set' . ucfirst( $k );
		    if ( method_exists( $this, $setMethod ) ) {
			    $this->$setMethod( $v );
		    }
	    }
    }
    /**
     * Get loginId value
     * @return string|null
     */
    public function getLoginId()
    {
        return $this->loginId;
    }
    /**
     * Set loginId value
     * @param string $_loginId the loginId
     * @return string
     */
    public function setLoginId($_loginId)
    {
        return ($this->loginId = $_loginId);
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }
    /**
     * Get licenseKey value
     * @return string|null
     */
    public function getLicenseKey()
    {
        return $this->licenseKey;
    }
    /**
     * Set licenseKey value
     * @param string $_licenseKey the licenseKey
     * @return string
     */
    public function setLicenseKey($_licenseKey)
    {
        return ($this->licenseKey = $_licenseKey);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $_accountNumber the accountNumber
     * @return string
     */
    public function setAccountNumber($_accountNumber)
    {
        return ($this->accountNumber = $_accountNumber);
    }
}
