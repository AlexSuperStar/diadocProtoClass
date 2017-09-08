<?php
/**
* Auto generated from AsyncMethodResult.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * AsyncMethodResult message
 */
class AsyncMethodResult extends \ProtobufMessage
{
    /* Field index constants */
    const TASKID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TASKID => array(
            'name' => 'TaskId',
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
        $this->values[self::TASKID] = null;
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
     * Sets value of 'TaskId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTaskId($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'TaskId' property
     *
     * @return string
     */
    public function getTaskId()
    {
        $value = $this->get(self::TASKID);
        return $value === null ? (string)$value : $value;
    }
}
}