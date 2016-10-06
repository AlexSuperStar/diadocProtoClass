<?php
/**
 * Auto generated from Attachment.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * Entity message
 */
class Entity extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITYID = 1;
    const CREATIONTIMESTAMP = 2;
    const CONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATIONTIMESTAMP => array(
            'name' => 'CreationTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Content'
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
        $this->values[self::ENTITYID] = null;
        $this->values[self::CREATIONTIMESTAMP] = null;
        $this->values[self::CONTENT] = null;
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

    /**
     * Sets value of 'CreationTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setCreationTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::CREATIONTIMESTAMP, $value);
    }

    /**
     * Returns value of 'CreationTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getCreationTimestamp()
    {
        return $this->get(self::CREATIONTIMESTAMP);
    }

    /**
     * Sets value of 'Content' property
     *
     * @param \Diadoc\Api\Proto\Content $value Property value
     *
     * @return null
     */
    public function setContent(\Diadoc\Api\Proto\Content $value=null)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return \Diadoc\Api\Proto\Content
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }
}
}