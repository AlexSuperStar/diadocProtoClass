<?php
/**
* Auto generated from DiadocMessage-GetApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EntityPatch message
 */
class EntityPatch extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITYID = 1;
    const DOCUMENTISDELETED = 2;
    const MOVEDTODEPARTMENT = 3;
    const DOCUMENTISRESTORED = 4;
    const CONTENTISPATCHED = 5;
    const FORWARDEDTOBOXID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTISDELETED => array(
            'default' => false,
            'name' => 'DocumentIsDeleted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MOVEDTODEPARTMENT => array(
            'name' => 'MovedToDepartment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTISRESTORED => array(
            'default' => false,
            'name' => 'DocumentIsRestored',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CONTENTISPATCHED => array(
            'default' => false,
            'name' => 'ContentIsPatched',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FORWARDEDTOBOXID => array(
            'name' => 'ForwardedToBoxId',
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
        $this->values[self::ENTITYID] = null;
        $this->values[self::DOCUMENTISDELETED] = self::$fields[self::DOCUMENTISDELETED]['default'];
        $this->values[self::MOVEDTODEPARTMENT] = null;
        $this->values[self::DOCUMENTISRESTORED] = self::$fields[self::DOCUMENTISRESTORED]['default'];
        $this->values[self::CONTENTISPATCHED] = self::$fields[self::CONTENTISPATCHED]['default'];
        $this->values[self::FORWARDEDTOBOXID] = null;
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
     * Sets value of 'DocumentIsDeleted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDocumentIsDeleted($value)
    {
        return $this->set(self::DOCUMENTISDELETED, $value);
    }

    /**
     * Returns value of 'DocumentIsDeleted' property
     *
     * @return boolean
     */
    public function getDocumentIsDeleted()
    {
        $value = $this->get(self::DOCUMENTISDELETED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'MovedToDepartment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMovedToDepartment($value)
    {
        return $this->set(self::MOVEDTODEPARTMENT, $value);
    }

    /**
     * Returns value of 'MovedToDepartment' property
     *
     * @return string
     */
    public function getMovedToDepartment()
    {
        $value = $this->get(self::MOVEDTODEPARTMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentIsRestored' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDocumentIsRestored($value)
    {
        return $this->set(self::DOCUMENTISRESTORED, $value);
    }

    /**
     * Returns value of 'DocumentIsRestored' property
     *
     * @return boolean
     */
    public function getDocumentIsRestored()
    {
        $value = $this->get(self::DOCUMENTISRESTORED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'ContentIsPatched' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setContentIsPatched($value)
    {
        return $this->set(self::CONTENTISPATCHED, $value);
    }

    /**
     * Returns value of 'ContentIsPatched' property
     *
     * @return boolean
     */
    public function getContentIsPatched()
    {
        $value = $this->get(self::CONTENTISPATCHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'ForwardedToBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setForwardedToBoxId($value)
    {
        return $this->set(self::FORWARDEDTOBOXID, $value);
    }

    /**
     * Returns value of 'ForwardedToBoxId' property
     *
     * @return string
     */
    public function getForwardedToBoxId()
    {
        $value = $this->get(self::FORWARDEDTOBOXID);
        return $value === null ? (string)$value : $value;
    }
}
}