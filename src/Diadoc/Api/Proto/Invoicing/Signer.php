<?php
/**
* Auto generated from Signer.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Signer message
 */
class Signer extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNERCERTIFICATE = 1;
    const SIGNERDETAILS = 2;
    const SIGNERCERTIFICATETHUMBPRINT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNERCERTIFICATE => array(
            'name' => 'SignerCertificate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERDETAILS => array(
            'name' => 'SignerDetails',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\SignerDetails'
        ),
        self::SIGNERCERTIFICATETHUMBPRINT => array(
            'name' => 'SignerCertificateThumbprint',
            'required' => false,
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
        $this->values[self::SIGNERCERTIFICATE] = null;
        $this->values[self::SIGNERDETAILS] = null;
        $this->values[self::SIGNERCERTIFICATETHUMBPRINT] = null;
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
     * Sets value of 'SignerCertificate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerCertificate($value)
    {
        return $this->set(self::SIGNERCERTIFICATE, $value);
    }

    /**
     * Returns value of 'SignerCertificate' property
     *
     * @return string
     */
    public function getSignerCertificate()
    {
        $value = $this->get(self::SIGNERCERTIFICATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignerDetails' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\SignerDetails $value Property value
     *
     * @return null
     */
    public function setSignerDetails(\Diadoc\Api\Proto\Invoicing\SignerDetails $value=null)
    {
        return $this->set(self::SIGNERDETAILS, $value);
    }

    /**
     * Returns value of 'SignerDetails' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\SignerDetails
     */
    public function getSignerDetails()
    {
        return $this->get(self::SIGNERDETAILS);
    }

    /**
     * Sets value of 'SignerCertificateThumbprint' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerCertificateThumbprint($value)
    {
        return $this->set(self::SIGNERCERTIFICATETHUMBPRINT, $value);
    }

    /**
     * Returns value of 'SignerCertificateThumbprint' property
     *
     * @return string
     */
    public function getSignerCertificateThumbprint()
    {
        $value = $this->get(self::SIGNERCERTIFICATETHUMBPRINT);
        return $value === null ? (string)$value : $value;
    }
}
}