<?php
/**
* Auto generated from RoamingNotification.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * RoamingNotification message
 */
class RoamingNotification extends \ProtobufMessage
{
    /* Field index constants */
    const SUCCESS = 1;
    const DESCRIPTION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUCCESS => array(
            'name' => 'Success',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DESCRIPTION => array(
            'name' => 'Description',
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
        $this->values[self::SUCCESS] = null;
        $this->values[self::DESCRIPTION] = null;
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
     * Sets value of 'Success' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSuccess($value)
    {
        return $this->set(self::SUCCESS, $value);
    }

    /**
     * Returns value of 'Success' property
     *
     * @return boolean
     */
    public function getSuccess()
    {
        $value = $this->get(self::SUCCESS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'Description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value)
    {
        return $this->set(self::DESCRIPTION, $value);
    }

    /**
     * Returns value of 'Description' property
     *
     * @return string
     */
    public function getDescription()
    {
        $value = $this->get(self::DESCRIPTION);
        return $value === null ? (string)$value : $value;
    }
}
}