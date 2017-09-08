<?php
/**
* Auto generated from User.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * User message
 */
class User extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LASTNAME = 2;
    const FIRSTNAME = 3;
    const MIDDLENAME = 4;
    const CLOUDCERTIFICATES = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'Id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LASTNAME => array(
            'name' => 'LastName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FIRSTNAME => array(
            'name' => 'FirstName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MIDDLENAME => array(
            'name' => 'MiddleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLOUDCERTIFICATES => array(
            'name' => 'CloudCertificates',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CertificateInfo'
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
        $this->values[self::ID] = null;
        $this->values[self::LASTNAME] = null;
        $this->values[self::FIRSTNAME] = null;
        $this->values[self::MIDDLENAME] = null;
        $this->values[self::CLOUDCERTIFICATES] = array();
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
     * Sets value of 'Id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'Id' property
     *
     * @return string
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'LastName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastName($value)
    {
        return $this->set(self::LASTNAME, $value);
    }

    /**
     * Returns value of 'LastName' property
     *
     * @return string
     */
    public function getLastName()
    {
        $value = $this->get(self::LASTNAME);
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
     * Sets value of 'MiddleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMiddleName($value)
    {
        return $this->set(self::MIDDLENAME, $value);
    }

    /**
     * Returns value of 'MiddleName' property
     *
     * @return string
     */
    public function getMiddleName()
    {
        $value = $this->get(self::MIDDLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'CloudCertificates' list
     *
     * @param \Diadoc\Api\Proto\CertificateInfo $value Value to append
     *
     * @return null
     */
    public function appendCloudCertificates(\Diadoc\Api\Proto\CertificateInfo $value)
    {
        return $this->append(self::CLOUDCERTIFICATES, $value);
    }

    /**
     * Clears 'CloudCertificates' list
     *
     * @return null
     */
    public function clearCloudCertificates()
    {
        return $this->clear(self::CLOUDCERTIFICATES);
    }

    /**
     * Returns 'CloudCertificates' list
     *
     * @return \Diadoc\Api\Proto\CertificateInfo[]
     */
    public function getCloudCertificates()
    {
        return $this->get(self::CLOUDCERTIFICATES);
    }

    /**
     * Returns 'CloudCertificates' iterator
     *
     * @return \ArrayIterator
     */
    public function getCloudCertificatesIterator()
    {
        return new \ArrayIterator($this->get(self::CLOUDCERTIFICATES));
    }

    /**
     * Returns element from 'CloudCertificates' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\CertificateInfo
     */
    public function getCloudCertificatesAt($offset)
    {
        return $this->get(self::CLOUDCERTIFICATES, $offset);
    }

    /**
     * Returns count of 'CloudCertificates' list
     *
     * @return int
     */
    public function getCloudCertificatesCount()
    {
        return $this->count(self::CLOUDCERTIFICATES);
    }
}
}