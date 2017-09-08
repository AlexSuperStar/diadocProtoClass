<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestDenialAttachment message
 */
class ResolutionRequestDenialAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const INITIALRESOLUTIONREQUESTID = 1;
    const COMMENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INITIALRESOLUTIONREQUESTID => array(
            'name' => 'InitialResolutionRequestId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMMENT => array(
            'name' => 'Comment',
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
        $this->values[self::INITIALRESOLUTIONREQUESTID] = null;
        $this->values[self::COMMENT] = null;
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
     * Sets value of 'InitialResolutionRequestId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialResolutionRequestId($value)
    {
        return $this->set(self::INITIALRESOLUTIONREQUESTID, $value);
    }

    /**
     * Returns value of 'InitialResolutionRequestId' property
     *
     * @return string
     */
    public function getInitialResolutionRequestId()
    {
        $value = $this->get(self::INITIALRESOLUTIONREQUESTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::COMMENT);
        return $value === null ? (string)$value : $value;
    }
}
}