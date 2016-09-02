<?php
/**
 * Auto generated from Address.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ForeignAddress message
 */
class ForeignAddress extends \ProtobufMessage
{
    /* Field index constants */
    const COUNTRY = 1;
    const ADDRESS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COUNTRY => array(
            'name' => 'Country',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDRESS => array(
            'name' => 'Address',
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
        $this->values[self::COUNTRY] = null;
        $this->values[self::ADDRESS] = null;
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
     * Sets value of 'Country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'Country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'Address' property
     *
     * @return string
     */
    public function getAddress()
    {
        $value = $this->get(self::ADDRESS);
        return $value === null ? (string)$value : $value;
    }
}
}