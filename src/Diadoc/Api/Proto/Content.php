<?php
/**
 * Auto generated from Content.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Content message
 */
class Content extends \ProtobufMessage
{
    /* Field index constants */
    const SIZE = 1;
    const DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIZE => array(
            'name' => 'Size',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED32,
        ),
        self::DATA => array(
            'name' => 'Data',
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
        $this->values[self::SIZE] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'Size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSize($value)
    {
        return $this->set(self::SIZE, $value);
    }

    /**
     * Returns value of 'Size' property
     *
     * @return integer
     */
    public function getSize()
    {
        $value = $this->get(self::SIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'Data' property
     *
     * @return string
     */
    public function getData()
    {
        $value = $this->get(self::DATA);
        return $value === null ? (string)$value : $value;
    }
}
}