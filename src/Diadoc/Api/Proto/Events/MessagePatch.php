<?php
/**
 * Auto generated from DiadocMessage-GetApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * MessagePatch message
 */
class MessagePatch extends \ProtobufMessage
{
    /* Field index constants */
    const MESSAGEID = 1;
    const TIMESTAMPTICKS = 2;
    const ENTITIES = 3;
    const FORDRAFT = 4;
    const DRAFTISRECYCLED = 5;
    const DRAFTISTRANSFORMEDTOMESSAGEIDLIST = 6;
    const DRAFTISLOCKED = 7;
    const MESSAGEISDELETED = 8;
    const ENTITYPATCHES = 9;
    const MESSAGEISRESTORED = 10;
    const MESSAGEISDELIVERED = 11;
    const DELIVEREDPATCHID = 12;
    const PATCHID = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMESTAMPTICKS => array(
            'name' => 'TimestampTicks',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::ENTITIES => array(
            'name' => 'Entities',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\Entity'
        ),
        self::FORDRAFT => array(
            'default' => false,
            'name' => 'ForDraft',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DRAFTISRECYCLED => array(
            'default' => false,
            'name' => 'DraftIsRecycled',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST => array(
            'name' => 'DraftIsTransformedToMessageIdList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DRAFTISLOCKED => array(
            'default' => false,
            'name' => 'DraftIsLocked',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MESSAGEISDELETED => array(
            'default' => false,
            'name' => 'MessageIsDeleted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ENTITYPATCHES => array(
            'name' => 'EntityPatches',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\EntityPatch'
        ),
        self::MESSAGEISRESTORED => array(
            'default' => false,
            'name' => 'MessageIsRestored',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MESSAGEISDELIVERED => array(
            'default' => false,
            'name' => 'MessageIsDelivered',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DELIVEREDPATCHID => array(
            'name' => 'DeliveredPatchId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PATCHID => array(
            'name' => 'PatchId',
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
        $this->values[self::TIMESTAMPTICKS] = null;
        $this->values[self::ENTITIES] = array();
        $this->values[self::FORDRAFT] = self::$fields[self::FORDRAFT]['default'];
        $this->values[self::DRAFTISRECYCLED] = self::$fields[self::DRAFTISRECYCLED]['default'];
        $this->values[self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST] = array();
        $this->values[self::DRAFTISLOCKED] = self::$fields[self::DRAFTISLOCKED]['default'];
        $this->values[self::MESSAGEISDELETED] = self::$fields[self::MESSAGEISDELETED]['default'];
        $this->values[self::ENTITYPATCHES] = array();
        $this->values[self::MESSAGEISRESTORED] = self::$fields[self::MESSAGEISRESTORED]['default'];
        $this->values[self::MESSAGEISDELIVERED] = self::$fields[self::MESSAGEISDELIVERED]['default'];
        $this->values[self::DELIVEREDPATCHID] = null;
        $this->values[self::PATCHID] = null;
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
     * Sets value of 'TimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestampTicks($value)
    {
        return $this->set(self::TIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'TimestampTicks' property
     *
     * @return integer
     */
    public function getTimestampTicks()
    {
        $value = $this->get(self::TIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'Entities' list
     *
     * @param \Diadoc\Api\Proto\Events\Entity $value Value to append
     *
     * @return null
     */
    public function appendEntities(\Diadoc\Api\Proto\Events\Entity $value)
    {
        return $this->append(self::ENTITIES, $value);
    }

    /**
     * Clears 'Entities' list
     *
     * @return null
     */
    public function clearEntities()
    {
        return $this->clear(self::ENTITIES);
    }

    /**
     * Returns 'Entities' list
     *
     * @return \Diadoc\Api\Proto\Events\Entity[]
     */
    public function getEntities()
    {
        return $this->get(self::ENTITIES);
    }

    /**
     * Returns 'Entities' iterator
     *
     * @return \ArrayIterator
     */
    public function getEntitiesIterator()
    {
        return new \ArrayIterator($this->get(self::ENTITIES));
    }

    /**
     * Returns element from 'Entities' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\Entity
     */
    public function getEntitiesAt($offset)
    {
        return $this->get(self::ENTITIES, $offset);
    }

    /**
     * Returns count of 'Entities' list
     *
     * @return int
     */
    public function getEntitiesCount()
    {
        return $this->count(self::ENTITIES);
    }

    /**
     * Sets value of 'ForDraft' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setForDraft($value)
    {
        return $this->set(self::FORDRAFT, $value);
    }

    /**
     * Returns value of 'ForDraft' property
     *
     * @return boolean
     */
    public function getForDraft()
    {
        $value = $this->get(self::FORDRAFT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'DraftIsRecycled' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDraftIsRecycled($value)
    {
        return $this->set(self::DRAFTISRECYCLED, $value);
    }

    /**
     * Returns value of 'DraftIsRecycled' property
     *
     * @return boolean
     */
    public function getDraftIsRecycled()
    {
        $value = $this->get(self::DRAFTISRECYCLED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'DraftIsTransformedToMessageIdList' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDraftIsTransformedToMessageIdList($value)
    {
        return $this->append(self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST, $value);
    }

    /**
     * Clears 'DraftIsTransformedToMessageIdList' list
     *
     * @return null
     */
    public function clearDraftIsTransformedToMessageIdList()
    {
        return $this->clear(self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST);
    }

    /**
     * Returns 'DraftIsTransformedToMessageIdList' list
     *
     * @return string[]
     */
    public function getDraftIsTransformedToMessageIdList()
    {
        return $this->get(self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST);
    }

    /**
     * Returns 'DraftIsTransformedToMessageIdList' iterator
     *
     * @return \ArrayIterator
     */
    public function getDraftIsTransformedToMessageIdListIterator()
    {
        return new \ArrayIterator($this->get(self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST));
    }

    /**
     * Returns element from 'DraftIsTransformedToMessageIdList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDraftIsTransformedToMessageIdListAt($offset)
    {
        return $this->get(self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST, $offset);
    }

    /**
     * Returns count of 'DraftIsTransformedToMessageIdList' list
     *
     * @return int
     */
    public function getDraftIsTransformedToMessageIdListCount()
    {
        return $this->count(self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST);
    }

    /**
     * Sets value of 'DraftIsLocked' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDraftIsLocked($value)
    {
        return $this->set(self::DRAFTISLOCKED, $value);
    }

    /**
     * Returns value of 'DraftIsLocked' property
     *
     * @return boolean
     */
    public function getDraftIsLocked()
    {
        $value = $this->get(self::DRAFTISLOCKED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'MessageIsDeleted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMessageIsDeleted($value)
    {
        return $this->set(self::MESSAGEISDELETED, $value);
    }

    /**
     * Returns value of 'MessageIsDeleted' property
     *
     * @return boolean
     */
    public function getMessageIsDeleted()
    {
        $value = $this->get(self::MESSAGEISDELETED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'EntityPatches' list
     *
     * @param \Diadoc\Api\Proto\Events\EntityPatch $value Value to append
     *
     * @return null
     */
    public function appendEntityPatches(\Diadoc\Api\Proto\Events\EntityPatch $value)
    {
        return $this->append(self::ENTITYPATCHES, $value);
    }

    /**
     * Clears 'EntityPatches' list
     *
     * @return null
     */
    public function clearEntityPatches()
    {
        return $this->clear(self::ENTITYPATCHES);
    }

    /**
     * Returns 'EntityPatches' list
     *
     * @return \Diadoc\Api\Proto\Events\EntityPatch[]
     */
    public function getEntityPatches()
    {
        return $this->get(self::ENTITYPATCHES);
    }

    /**
     * Returns 'EntityPatches' iterator
     *
     * @return \ArrayIterator
     */
    public function getEntityPatchesIterator()
    {
        return new \ArrayIterator($this->get(self::ENTITYPATCHES));
    }

    /**
     * Returns element from 'EntityPatches' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\EntityPatch
     */
    public function getEntityPatchesAt($offset)
    {
        return $this->get(self::ENTITYPATCHES, $offset);
    }

    /**
     * Returns count of 'EntityPatches' list
     *
     * @return int
     */
    public function getEntityPatchesCount()
    {
        return $this->count(self::ENTITYPATCHES);
    }

    /**
     * Sets value of 'MessageIsRestored' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMessageIsRestored($value)
    {
        return $this->set(self::MESSAGEISRESTORED, $value);
    }

    /**
     * Returns value of 'MessageIsRestored' property
     *
     * @return boolean
     */
    public function getMessageIsRestored()
    {
        $value = $this->get(self::MESSAGEISRESTORED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'MessageIsDelivered' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMessageIsDelivered($value)
    {
        return $this->set(self::MESSAGEISDELIVERED, $value);
    }

    /**
     * Returns value of 'MessageIsDelivered' property
     *
     * @return boolean
     */
    public function getMessageIsDelivered()
    {
        $value = $this->get(self::MESSAGEISDELIVERED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'DeliveredPatchId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeliveredPatchId($value)
    {
        return $this->set(self::DELIVEREDPATCHID, $value);
    }

    /**
     * Returns value of 'DeliveredPatchId' property
     *
     * @return string
     */
    public function getDeliveredPatchId()
    {
        $value = $this->get(self::DELIVEREDPATCHID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'PatchId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPatchId($value)
    {
        return $this->set(self::PATCHID, $value);
    }

    /**
     * Returns value of 'PatchId' property
     *
     * @return string
     */
    public function getPatchId()
    {
        $value = $this->get(self::PATCHID);
        return $value === null ? (string)$value : $value;
    }
}
}