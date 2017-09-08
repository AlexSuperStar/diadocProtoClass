<?php
/**
* Auto generated from TovTorgInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * GroundInfo message
 */
class GroundInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const NUMBER = 2;
    const DATE = 3;
    const INFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'Name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NUMBER => array(
            'name' => 'Number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DATE => array(
            'name' => 'Date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INFO => array(
            'name' => 'Info',
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
        $this->values[self::NAME] = null;
        $this->values[self::NUMBER] = null;
        $this->values[self::DATE] = null;
        $this->values[self::INFO] = null;
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
     * Sets value of 'Name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'Name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNumber($value)
    {
        return $this->set(self::NUMBER, $value);
    }

    /**
     * Returns value of 'Number' property
     *
     * @return string
     */
    public function getNumber()
    {
        $value = $this->get(self::NUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDate($value)
    {
        return $this->set(self::DATE, $value);
    }

    /**
     * Returns value of 'Date' property
     *
     * @return string
     */
    public function getDate()
    {
        $value = $this->get(self::DATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInfo($value)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'Info' property
     *
     * @return string
     */
    public function getInfo()
    {
        $value = $this->get(self::INFO);
        return $value === null ? (string)$value : $value;
    }
}
}