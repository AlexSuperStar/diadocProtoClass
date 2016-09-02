<?php
/**
 * Auto generated from DocumentId.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * DocumentId message
 */
class DocumentId extends \ProtobufMessage
{
    /* Field index constants */
    const MESSAGEID = 1;
    const ENTITYID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENTITYID => array(
            'name' => 'EntityId',
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
        $this->values[self::MESSAGEID] = null;
        $this->values[self::ENTITYID] = null;
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
     * Sets value of 'MessageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageId($value)
    {
        return $this->set(self::MESSAGEID, $value);
    }

    /**
     * Returns value of 'MessageId' property
     *
     * @return string
     */
    public function getMessageId()
    {
        $value = $this->get(self::MESSAGEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'EntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::ENTITYID, $value);
    }

    /**
     * Returns value of 'EntityId' property
     *
     * @return string
     */
    public function getEntityId()
    {
        $value = $this->get(self::ENTITYID);
        return $value === null ? (string)$value : $value;
    }
}
}