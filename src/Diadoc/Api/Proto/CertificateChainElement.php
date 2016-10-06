<?php
/**
 * Auto generated from SignatureVerificationResult.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CertificateChainElement message
 */
class CertificateChainElement extends \ProtobufMessage
{
    /* Field index constants */
    const CERTIFICATECHAINSTATUSFLAGS = 1;
    const DERCERTIFICATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CERTIFICATECHAINSTATUSFLAGS => array(
            'name' => 'CertificateChainStatusFlags',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DERCERTIFICATE => array(
            'name' => 'DerCertificate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::CERTIFICATECHAINSTATUSFLAGS] = null;
        $this->values[self::DERCERTIFICATE] = null;
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
     * Sets value of 'CertificateChainStatusFlags' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCertificateChainStatusFlags($value)
    {
        return $this->set(self::CERTIFICATECHAINSTATUSFLAGS, $value);
    }

    /**
     * Returns value of 'CertificateChainStatusFlags' property
     *
     * @return integer
     */
    public function getCertificateChainStatusFlags()
    {
        $value = $this->get(self::CERTIFICATECHAINSTATUSFLAGS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'DerCertificate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDerCertificate($value)
    {
        return $this->set(self::DERCERTIFICATE, $value);
    }

    /**
     * Returns value of 'DerCertificate' property
     *
     * @return string
     */
    public function getDerCertificate()
    {
        $value = $this->get(self::DERCERTIFICATE);
        return $value === null ? (string)$value : $value;
    }
}
}