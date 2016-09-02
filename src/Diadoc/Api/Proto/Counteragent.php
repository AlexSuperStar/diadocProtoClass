<?php
/**
 * Auto generated from Counteragent.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Counteragent message
 */
class Counteragent extends \ProtobufMessage
{
    /* Field index constants */
    const INDEXKEY = 1;
    const ORGANIZATION = 2;
    const CURRENTSTATUS = 3;
    const LASTEVENTTIMESTAMPTICKS = 4;
    const MESSAGEFROMCOUNTERAGENT = 6;
    const MESSAGETOCOUNTERAGENT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGANIZATION => array(
            'name' => 'Organization',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Organization'
        ),
        self::CURRENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\CounteragentStatus::UnknownCounteragentStatus,
            'name' => 'CurrentStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTEVENTTIMESTAMPTICKS => array(
            'name' => 'LastEventTimestampTicks',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::MESSAGEFROMCOUNTERAGENT => array(
            'name' => 'MessageFromCounteragent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGETOCOUNTERAGENT => array(
            'name' => 'MessageToCounteragent',
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
        $this->values[self::INDEXKEY] = null;
        $this->values[self::ORGANIZATION] = null;
        $this->values[self::CURRENTSTATUS] = self::$fields[self::CURRENTSTATUS]['default'];
        $this->values[self::LASTEVENTTIMESTAMPTICKS] = null;
        $this->values[self::MESSAGEFROMCOUNTERAGENT] = null;
        $this->values[self::MESSAGETOCOUNTERAGENT] = null;
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
     * Sets value of 'IndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndexKey($value)
    {
        return $this->set(self::INDEXKEY, $value);
    }

    /**
     * Returns value of 'IndexKey' property
     *
     * @return string
     */
    public function getIndexKey()
    {
        $value = $this->get(self::INDEXKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Organization' property
     *
     * @param \Diadoc\Api\Proto\Organization $value Property value
     *
     * @return null
     */
    public function setOrganization(\Diadoc\Api\Proto\Organization $value=null)
    {
        return $this->set(self::ORGANIZATION, $value);
    }

    /**
     * Returns value of 'Organization' property
     *
     * @return \Diadoc\Api\Proto\Organization
     */
    public function getOrganization()
    {
        return $this->get(self::ORGANIZATION);
    }

    /**
     * Sets value of 'CurrentStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentStatus($value)
    {
        return $this->set(self::CURRENTSTATUS, $value);
    }

    /**
     * Returns value of 'CurrentStatus' property
     *
     * @return integer
     */
    public function getCurrentStatus()
    {
        $value = $this->get(self::CURRENTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'LastEventTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastEventTimestampTicks($value)
    {
        return $this->set(self::LASTEVENTTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'LastEventTimestampTicks' property
     *
     * @return integer
     */
    public function getLastEventTimestampTicks()
    {
        $value = $this->get(self::LASTEVENTTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'MessageFromCounteragent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageFromCounteragent($value)
    {
        return $this->set(self::MESSAGEFROMCOUNTERAGENT, $value);
    }

    /**
     * Returns value of 'MessageFromCounteragent' property
     *
     * @return string
     */
    public function getMessageFromCounteragent()
    {
        $value = $this->get(self::MESSAGEFROMCOUNTERAGENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'MessageToCounteragent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageToCounteragent($value)
    {
        return $this->set(self::MESSAGETOCOUNTERAGENT, $value);
    }

    /**
     * Returns value of 'MessageToCounteragent' property
     *
     * @return string
     */
    public function getMessageToCounteragent()
    {
        $value = $this->get(self::MESSAGETOCOUNTERAGENT);
        return $value === null ? (string)$value : $value;
    }
}
}