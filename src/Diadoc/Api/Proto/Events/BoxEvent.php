<?php
/**
 * Auto generated from DiadocMessage-GetApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * BoxEvent message
 */
class BoxEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENTID = 1;
    const MESSAGE = 2;
    const PATCH = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENTID => array(
            'name' => 'EventId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGE => array(
            'name' => 'Message',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\Message'
        ),
        self::PATCH => array(
            'name' => 'Patch',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\MessagePatch'
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
        $this->values[self::EVENTID] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::PATCH] = null;
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
     * Sets value of 'Message' property
     *
     * @param \Diadoc\Api\Proto\Events\Message $value Property value
     *
     * @return null
     */
    public function setMessage(\Diadoc\Api\Proto\Events\Message $value=null)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'Message' property
     *
     * @return \Diadoc\Api\Proto\Events\Message
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }

    /**
     * Sets value of 'Patch' property
     *
     * @param \Diadoc\Api\Proto\Events\MessagePatch $value Property value
     *
     * @return null
     */
    public function setPatch(\Diadoc\Api\Proto\Events\MessagePatch $value=null)
    {
        return $this->set(self::PATCH, $value);
    }

    /**
     * Returns value of 'Patch' property
     *
     * @return \Diadoc\Api\Proto\Events\MessagePatch
     */
    public function getPatch()
    {
        return $this->get(self::PATCH);
    }
}
}