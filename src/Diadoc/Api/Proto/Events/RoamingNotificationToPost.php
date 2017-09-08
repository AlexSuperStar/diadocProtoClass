<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * RoamingNotificationToPost message
 */
class RoamingNotificationToPost extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const EVENTID = 2;
    const SUCCESS = 3;
    const DESCRIPTION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EVENTID => array(
            'name' => 'EventId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
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
        $this->values[self::BOXID] = null;
        $this->values[self::EVENTID] = null;
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        $value = $this->get(self::BOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'EventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENTID, $value);
    }

    /**
     * Returns value of 'EventId' property
     *
     * @return string
     */
    public function getEventId()
    {
        $value = $this->get(self::EVENTID);
        return $value === null ? (string)$value : $value;
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