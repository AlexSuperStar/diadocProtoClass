<?php
/**
 * Auto generated from ExternalServiceAuthInfo.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ExternalServiceAuthInfo message
 */
class ExternalServiceAuthInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SERVICEUSERID = 1;
    const THUMBPRINT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVICEUSERID => array(
            'name' => 'ServiceUserId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::THUMBPRINT => array(
            'name' => 'Thumbprint',
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
        $this->values[self::SERVICEUSERID] = null;
        $this->values[self::THUMBPRINT] = null;
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
     * Sets value of 'ServiceUserId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServiceUserId($value)
    {
        return $this->set(self::SERVICEUSERID, $value);
    }

    /**
     * Returns value of 'ServiceUserId' property
     *
     * @return string
     */
    public function getServiceUserId()
    {
        $value = $this->get(self::SERVICEUSERID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Thumbprint' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThumbprint($value)
    {
        return $this->set(self::THUMBPRINT, $value);
    }

    /**
     * Returns value of 'Thumbprint' property
     *
     * @return string
     */
    public function getThumbprint()
    {
        $value = $this->get(self::THUMBPRINT);
        return $value === null ? (string)$value : $value;
    }
}
}