<?php
/**
 * Auto generated from SignatureVerificationResult.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * SignatureVerificationResult message
 */
class SignatureVerificationResult extends \ProtobufMessage
{
    /* Field index constants */
    const ISVALID = 1;
    const CERTIFICATESTATUS = 2;
    const SIGNATURETIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CERTIFICATESTATUS => array(
            'name' => 'CertificateStatus',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\CertificateVerificationResult'
        ),
        self::SIGNATURETIMESTAMP => array(
            'name' => 'SignatureTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::ISVALID] = null;
        $this->values[self::CERTIFICATESTATUS] = null;
        $this->values[self::SIGNATURETIMESTAMP] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'IsValid' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsValid($value)
    {
        return $this->set(self::ISVALID, $value);
    }

    /**
     * Returns value of 'IsValid' property
     *
     * @return boolean
     */
    public function getIsValid()
    {
        $value = $this->get(self::ISVALID);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'CertificateStatus' property
     *
     * @param \Diadoc\Api\Proto\CertificateVerificationResult $value Property value
     *
     * @return null
     */
    public function setCertificateStatus(\Diadoc\Api\Proto\CertificateVerificationResult $value=null)
    {
        return $this->set(self::CERTIFICATESTATUS, $value);
    }

    /**
     * Returns value of 'CertificateStatus' property
     *
     * @return \Diadoc\Api\Proto\CertificateVerificationResult
     */
    public function getCertificateStatus()
    {
        return $this->get(self::CERTIFICATESTATUS);
    }

    /**
     * Sets value of 'SignatureTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setSignatureTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::SIGNATURETIMESTAMP, $value);
    }

    /**
     * Returns value of 'SignatureTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getSignatureTimestamp()
    {
        return $this->get(self::SIGNATURETIMESTAMP);
    }
}
}