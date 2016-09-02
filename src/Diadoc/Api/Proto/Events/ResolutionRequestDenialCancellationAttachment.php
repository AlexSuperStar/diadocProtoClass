<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestDenialCancellationAttachment message
 */
class ResolutionRequestDenialCancellationAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const INITIALRESOLUTIONREQUESTDENIALID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INITIALRESOLUTIONREQUESTDENIALID => array(
            'name' => 'InitialResolutionRequestDenialId',
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
        $this->values[self::INITIALRESOLUTIONREQUESTDENIALID] = null;
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
     * Sets value of 'InitialResolutionRequestDenialId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialResolutionRequestDenialId($value)
    {
        return $this->set(self::INITIALRESOLUTIONREQUESTDENIALID, $value);
    }

    /**
     * Returns value of 'InitialResolutionRequestDenialId' property
     *
     * @return string
     */
    public function getInitialResolutionRequestDenialId()
    {
        $value = $this->get(self::INITIALRESOLUTIONREQUESTDENIALID);
        return $value === null ? (string)$value : $value;
    }
}
}