<?php
/**
 * Auto generated from CloudSign.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CloudSignResult message
 */
class CloudSignResult extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN => array(
            'name' => 'Token',
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
        $this->values[self::TOKEN] = null;
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
     * Sets value of 'Token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::TOKEN, $value);
    }

    /**
     * Returns value of 'Token' property
     *
     * @return string
     */
    public function getToken()
    {
        $value = $this->get(self::TOKEN);
        return $value === null ? (string)$value : $value;
    }
}
}