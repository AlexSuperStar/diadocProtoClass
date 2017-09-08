<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * ExtendedSignerDetailsToPost message
 */
class ExtendedSignerDetailsToPost extends \ProtobufMessage
{
    /* Field index constants */
    const JOBTITLE = 1;
    const REGISTRATIONCERTIFICATE = 2;
    const SIGNERTYPE = 3;
    const SIGNERINFO = 4;
    const SIGNERPOWERS = 5;
    const SIGNERSTATUS = 6;
    const SIGNERPOWERSBASE = 7;
    const SIGNERORGPOWERSBASE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::JOBTITLE => array(
            'name' => 'JobTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REGISTRATIONCERTIFICATE => array(
            'name' => 'RegistrationCertificate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERTYPE => array(
            'name' => 'SignerType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNERINFO => array(
            'name' => 'SignerInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERPOWERS => array(
            'name' => 'SignerPowers',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNERSTATUS => array(
            'name' => 'SignerStatus',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNERPOWERSBASE => array(
            'name' => 'SignerPowersBase',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERORGPOWERSBASE => array(
            'name' => 'SignerOrgPowersBase',
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
        $this->values[self::JOBTITLE] = null;
        $this->values[self::REGISTRATIONCERTIFICATE] = null;
        $this->values[self::SIGNERTYPE] = null;
        $this->values[self::SIGNERINFO] = null;
        $this->values[self::SIGNERPOWERS] = null;
        $this->values[self::SIGNERSTATUS] = null;
        $this->values[self::SIGNERPOWERSBASE] = null;
        $this->values[self::SIGNERORGPOWERSBASE] = null;
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
     * Sets value of 'JobTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJobTitle($value)
    {
        return $this->set(self::JOBTITLE, $value);
    }

    /**
     * Returns value of 'JobTitle' property
     *
     * @return string
     */
    public function getJobTitle()
    {
        $value = $this->get(self::JOBTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'RegistrationCertificate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegistrationCertificate($value)
    {
        return $this->set(self::REGISTRATIONCERTIFICATE, $value);
    }

    /**
     * Returns value of 'RegistrationCertificate' property
     *
     * @return string
     */
    public function getRegistrationCertificate()
    {
        $value = $this->get(self::REGISTRATIONCERTIFICATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignerType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSignerType($value)
    {
        return $this->set(self::SIGNERTYPE, $value);
    }

    /**
     * Returns value of 'SignerType' property
     *
     * @return integer
     */
    public function getSignerType()
    {
        $value = $this->get(self::SIGNERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SignerInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerInfo($value)
    {
        return $this->set(self::SIGNERINFO, $value);
    }

    /**
     * Returns value of 'SignerInfo' property
     *
     * @return string
     */
    public function getSignerInfo()
    {
        $value = $this->get(self::SIGNERINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignerPowers' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSignerPowers($value)
    {
        return $this->set(self::SIGNERPOWERS, $value);
    }

    /**
     * Returns value of 'SignerPowers' property
     *
     * @return integer
     */
    public function getSignerPowers()
    {
        $value = $this->get(self::SIGNERPOWERS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SignerStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSignerStatus($value)
    {
        return $this->set(self::SIGNERSTATUS, $value);
    }

    /**
     * Returns value of 'SignerStatus' property
     *
     * @return integer
     */
    public function getSignerStatus()
    {
        $value = $this->get(self::SIGNERSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SignerPowersBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerPowersBase($value)
    {
        return $this->set(self::SIGNERPOWERSBASE, $value);
    }

    /**
     * Returns value of 'SignerPowersBase' property
     *
     * @return string
     */
    public function getSignerPowersBase()
    {
        $value = $this->get(self::SIGNERPOWERSBASE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignerOrgPowersBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerOrgPowersBase($value)
    {
        return $this->set(self::SIGNERORGPOWERSBASE, $value);
    }

    /**
     * Returns value of 'SignerOrgPowersBase' property
     *
     * @return string
     */
    public function getSignerOrgPowersBase()
    {
        $value = $this->get(self::SIGNERORGPOWERSBASE);
        return $value === null ? (string)$value : $value;
    }
}
}