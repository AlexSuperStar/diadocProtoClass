<?php
/**
* Auto generated from Signer.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * SignerDetails message
 */
class SignerDetails extends \ProtobufMessage
{
    /* Field index constants */
    const SURNAME = 1;
    const FIRSTNAME = 2;
    const PATRONYMIC = 3;
    const JOBTITLE = 4;
    const INN = 5;
    const SOLEPROPRIETORREGISTRATIONCERTIFICATE = 6;

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
        self::SOLEPROPRIETORREGISTRATIONCERTIFICATE => array(
            'name' => 'SoleProprietorRegistrationCertificate',
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
        $this->values[self::SOLEPROPRIETORREGISTRATIONCERTIFICATE] = null;
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
     * Sets value of 'SoleProprietorRegistrationCertificate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSoleProprietorRegistrationCertificate($value)
    {
        return $this->set(self::SOLEPROPRIETORREGISTRATIONCERTIFICATE, $value);
    }

    /**
     * Returns value of 'SoleProprietorRegistrationCertificate' property
     *
     * @return string
     */
    public function getSoleProprietorRegistrationCertificate()
    {
        $value = $this->get(self::SOLEPROPRIETORREGISTRATIONCERTIFICATE);
        return $value === null ? (string)$value : $value;
    }
}
}