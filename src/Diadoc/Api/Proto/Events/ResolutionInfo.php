<?php
/**
* Auto generated from ResolutionInfo.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionInfo message
 */
class ResolutionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const RESOLUTIONTYPE = 1;
    const AUTHOR = 2;
    const INITIALREQUESTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESOLUTIONTYPE => array(
            'default' => \Diadoc\Api\Proto\Events\ResolutionType::UnknownResolutionType,
            'name' => 'ResolutionType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::RESOLUTIONTYPE] = self::$fields[self::RESOLUTIONTYPE]['default'];
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
     * Sets value of 'ResolutionType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResolutionType($value)
    {
        return $this->set(self::RESOLUTIONTYPE, $value);
    }

    /**
     * Returns value of 'ResolutionType' property
     *
     * @return integer
     */
    public function getResolutionType()
    {
        $value = $this->get(self::RESOLUTIONTYPE);
        return $value === null ? (integer)$value : $value;
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