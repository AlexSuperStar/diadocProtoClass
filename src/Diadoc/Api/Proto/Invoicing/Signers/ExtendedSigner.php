<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * ExtendedSigner message
 */
class ExtendedSigner extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const SIGNERCERTIFICATE = 2;
    const SIGNERCERTIFICATETHUMBPRINT = 3;
    const SIGNERDETAILS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERCERTIFICATE => array(
            'name' => 'SignerCertificate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERCERTIFICATETHUMBPRINT => array(
            'name' => 'SignerCertificateThumbprint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERDETAILS => array(
            'name' => 'SignerDetails',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails'
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
        $this->values[self::BOXID] = null;
        $this->values[self::SIGNERCERTIFICATE] = null;
        $this->values[self::SIGNERCERTIFICATETHUMBPRINT] = null;
        $this->values[self::SIGNERDETAILS] = null;
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        $value = $this->get(self::BOXID);
        return $value === null ? (string)$value : $value;
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

    /**
     * Sets value of 'SignerDetails' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails $value Property value
     *
     * @return null
     */
    public function setSignerDetails(\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails $value=null)
    {
        return $this->set(self::SIGNERDETAILS, $value);
    }

    /**
     * Returns value of 'SignerDetails' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails
     */
    public function getSignerDetails()
    {
        return $this->get(self::SIGNERDETAILS);
    }
}
}