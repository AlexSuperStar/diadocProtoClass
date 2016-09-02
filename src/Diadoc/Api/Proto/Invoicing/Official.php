<?php
/**
 * Auto generated from Official.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Official message
 */
class Official extends \ProtobufMessage
{
    /* Field index constants */
    const SURNAME = 1;
    const FIRSTNAME = 2;
    const PATRONYMIC = 3;
    const JOBTITLE = 4;

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
}
}