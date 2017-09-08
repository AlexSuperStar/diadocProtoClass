<?php
/**
* Auto generated from ResolutionRequestDenialInfo.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestDenialInfo message
 */
class ResolutionRequestDenialInfo extends \ProtobufMessage
{
    /* Field index constants */
    const AUTHOR = 1;
    const INITIALREQUESTID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AUTHOR => array(
            'name' => 'Author',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INITIALREQUESTID => array(
            'name' => 'InitialRequestId',
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
        $this->values[self::AUTHOR] = null;
        $this->values[self::INITIALREQUESTID] = null;
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
     * Sets value of 'Author' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthor($value)
    {
        return $this->set(self::AUTHOR, $value);
    }

    /**
     * Returns value of 'Author' property
     *
     * @return string
     */
    public function getAuthor()
    {
        $value = $this->get(self::AUTHOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InitialRequestId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialRequestId($value)
    {
        return $this->set(self::INITIALREQUESTID, $value);
    }

    /**
     * Returns value of 'InitialRequestId' property
     *
     * @return string
     */
    public function getInitialRequestId()
    {
        $value = $this->get(self::INITIALREQUESTID);
        return $value === null ? (string)$value : $value;
    }
}
}