<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestCancellationAttachment message
 */
class ResolutionRequestCancellationAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const INITIALRESOLUTIONREQUESTID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INITIALRESOLUTIONREQUESTID => array(
            'name' => 'InitialResolutionRequestId',
            'required' => true,
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
}
}