<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * ExtendedSignerDetails message
 */
class ExtendedSignerDetails extends \ProtobufMessage
{
    /* Field index constants */
    const SURNAME = 1;
    const FIRSTNAME = 2;
    const PATRONYMIC = 3;
    const JOBTITLE = 4;
    const INN = 5;
    const REGISTRATIONCERTIFICATE = 6;
    const SIGNERTYPE = 7;
    const SIGNERORGANIZATIONNAME = 8;
    const SIGNERINFO = 9;
    const SIGNERPOWERS = 10;
    const SIGNERSTATUS = 11;
    const SIGNERPOWERSBASE = 12;
    const SIGNERORGPOWERSBASE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SURNAME => array(
            'name' => 'Surname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FIRSTNAME => array(
            'name' => 'FirstName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PATRONYMIC => array(
            'name' => 'Patronymic',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JOBTITLE => array(
            'name' => 'JobTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INN => array(
            'name' => 'Inn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REGISTRATIONCERTIFICATE => array(
            'name' => 'RegistrationCertificate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERTYPE => array(
            'default' => \Diadoc\Api\Proto\Invoicing\Signers\SignerType::LegalEntity,
            'name' => 'SignerType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNERORGANIZATIONNAME => array(
            'name' => 'SignerOrganizationName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SURNAME] = null;
        $this->values[self::FIRSTNAME] = null;
        $this->values[self::PATRONYMIC] = null;
        $this->values[self::JOBTITLE] = null;
        $this->values[self::INN] = null;
        $this->values[self::REGISTRATIONCERTIFICATE] = null;
        $this->values[self::SIGNERTYPE] = self::$fields[self::SIGNERTYPE]['default'];
        $this->values[self::SIGNERORGANIZATIONNAME] = null;
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
     * Sets value of 'Surname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSurname($value)
    {
        return $this->set(self::SURNAME, $value);
    }

    /**
     * Returns value of 'Surname' property
     *
     * @return string
     */
    public function getSurname()
    {
        $value = $this->get(self::SURNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'FirstName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstName($value)
    {
        return $this->set(self::FIRSTNAME, $value);
    }

    /**
     * Returns value of 'FirstName' property
     *
     * @return string
     */
    public function getFirstName()
    {
        $value = $this->get(self::FIRSTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Patronymic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPatronymic($value)
    {
        return $this->set(self::PATRONYMIC, $value);
    }

    /**
     * Returns value of 'Patronymic' property
     *
     * @return string
     */
    public function getPatronymic()
    {
        $value = $this->get(self::PATRONYMIC);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'Inn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInn($value)
    {
        return $this->set(self::INN, $value);
    }

    /**
     * Returns value of 'Inn' property
     *
     * @return string
     */
    public function getInn()
    {
        $value = $this->get(self::INN);
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
     * Sets value of 'SignerOrganizationName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerOrganizationName($value)
    {
        return $this->set(self::SIGNERORGANIZATIONNAME, $value);
    }

    /**
     * Returns value of 'SignerOrganizationName' property
     *
     * @return string
     */
    public function getSignerOrganizationName()
    {
        $value = $this->get(self::SIGNERORGANIZATIONNAME);
        return $value === null ? (string)$value : $value;
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