<?php
/**
 * Auto generated from DiadocMessage-GetApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * Message message
 */
class Message extends \ProtobufMessage
{
    /* Field index constants */
    const MESSAGEID = 1;
    const TIMESTAMPTICKS = 2;
    const LASTPATCHTIMESTAMPTICKS = 3;
    const FROMBOXID = 4;
    const FROMTITLE = 5;
    const TOBOXID = 6;
    const TOTITLE = 7;
    const ENTITIES = 8;
    const ISDRAFT = 9;
    const DRAFTISLOCKED = 10;
    const DRAFTISRECYCLED = 11;
    const CREATEDFROMDRAFTID = 12;
    const DRAFTISTRANSFORMEDTOMESSAGEIDLIST = 13;
    const ISDELETED = 14;
    const ISTEST = 15;
    const ISINTERNAL = 16;
    const ISPROXIFIED = 17;
    const PROXYBOXID = 18;
    const PROXYTITLE = 19;
    const PACKETISLOCKED = 20;

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
        self::LASTPATCHTIMESTAMPTICKS => array(
            'name' => 'LastPatchTimestampTicks',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::FROMBOXID => array(
            'name' => 'FromBoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FROMTITLE => array(
            'name' => 'FromTitle',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOBOXID => array(
            'name' => 'ToBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTITLE => array(
            'name' => 'ToTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENTITIES => array(
            'name' => 'Entities',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\Entity'
        ),
        self::ISDRAFT => array(
            'default' => false,
            'name' => 'IsDraft',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DRAFTISLOCKED => array(
            'default' => false,
            'name' => 'DraftIsLocked',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DRAFTISRECYCLED => array(
            'default' => false,
            'name' => 'DraftIsRecycled',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CREATEDFROMDRAFTID => array(
            'name' => 'CreatedFromDraftId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST => array(
            'name' => 'DraftIsTransformedToMessageIdList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISDELETED => array(
            'default' => false,
            'name' => 'IsDeleted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISTEST => array(
            'default' => false,
            'name' => 'IsTest',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISINTERNAL => array(
            'default' => false,
            'name' => 'IsInternal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISPROXIFIED => array(
            'default' => false,
            'name' => 'IsProxified',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PROXYBOXID => array(
            'name' => 'ProxyBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROXYTITLE => array(
            'name' => 'ProxyTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PACKETISLOCKED => array(
            'default' => false,
            'name' => 'PacketIsLocked',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::LASTPATCHTIMESTAMPTICKS] = null;
        $this->values[self::FROMBOXID] = null;
        $this->values[self::FROMTITLE] = null;
        $this->values[self::TOBOXID] = null;
        $this->values[self::TOTITLE] = null;
        $this->values[self::ENTITIES] = array();
        $this->values[self::ISDRAFT] = self::$fields[self::ISDRAFT]['default'];
        $this->values[self::DRAFTISLOCKED] = self::$fields[self::DRAFTISLOCKED]['default'];
        $this->values[self::DRAFTISRECYCLED] = self::$fields[self::DRAFTISRECYCLED]['default'];
        $this->values[self::CREATEDFROMDRAFTID] = null;
        $this->values[self::DRAFTISTRANSFORMEDTOMESSAGEIDLIST] = array();
        $this->values[self::ISDELETED] = self::$fields[self::ISDELETED]['default'];
        $this->values[self::ISTEST] = self::$fields[self::ISTEST]['default'];
        $this->values[self::ISINTERNAL] = self::$fields[self::ISINTERNAL]['default'];
        $this->values[self::ISPROXIFIED] = self::$fields[self::ISPROXIFIED]['default'];
        $this->values[self::PROXYBOXID] = null;
        $this->values[self::PROXYTITLE] = null;
        $this->values[self::PACKETISLOCKED] = self::$fields[self::PACKETISLOCKED]['default'];
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
     * Sets value of 'LastPatchTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastPatchTimestampTicks($value)
    {
        return $this->set(self::LASTPATCHTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'LastPatchTimestampTicks' property
     *
     * @return integer
     */
    public function getLastPatchTimestampTicks()
    {
        $value = $this->get(self::LASTPATCHTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'FromBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromBoxId($value)
    {
        return $this->set(self::FROMBOXID, $value);
    }

    /**
     * Returns value of 'FromBoxId' property
     *
     * @return string
     */
    public function getFromBoxId()
    {
        $value = $this->get(self::FROMBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'FromTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromTitle($value)
    {
        return $this->set(self::FROMTITLE, $value);
    }

    /**
     * Returns value of 'FromTitle' property
     *
     * @return string
     */
    public function getFromTitle()
    {
        $value = $this->get(self::FROMTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ToBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToBoxId($value)
    {
        return $this->set(self::TOBOXID, $value);
    }

    /**
     * Returns value of 'ToBoxId' property
     *
     * @return string
     */
    public function getToBoxId()
    {
        $value = $this->get(self::TOBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ToTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToTitle($value)
    {
        return $this->set(self::TOTITLE, $value);
    }

    /**
     * Returns value of 'ToTitle' property
     *
     * @return string
     */
    public function getToTitle()
    {
        $value = $this->get(self::TOTITLE);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'IsDraft' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDraft($value)
    {
        return $this->set(self::ISDRAFT, $value);
    }

    /**
     * Returns value of 'IsDraft' property
     *
     * @return boolean
     */
    public function getIsDraft()
    {
        $value = $this->get(self::ISDRAFT);
        return $value === null ? (boolean)$value : $value;
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
     * Sets value of 'CreatedFromDraftId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedFromDraftId($value)
    {
        return $this->set(self::CREATEDFROMDRAFTID, $value);
    }

    /**
     * Returns value of 'CreatedFromDraftId' property
     *
     * @return string
     */
    public function getCreatedFromDraftId()
    {
        $value = $this->get(self::CREATEDFROMDRAFTID);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'IsDeleted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDeleted($value)
    {
        return $this->set(self::ISDELETED, $value);
    }

    /**
     * Returns value of 'IsDeleted' property
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        $value = $this->get(self::ISDELETED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsTest' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsTest($value)
    {
        return $this->set(self::ISTEST, $value);
    }

    /**
     * Returns value of 'IsTest' property
     *
     * @return boolean
     */
    public function getIsTest()
    {
        $value = $this->get(self::ISTEST);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsInternal' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsInternal($value)
    {
        return $this->set(self::ISINTERNAL, $value);
    }

    /**
     * Returns value of 'IsInternal' property
     *
     * @return boolean
     */
    public function getIsInternal()
    {
        $value = $this->get(self::ISINTERNAL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsProxified' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsProxified($value)
    {
        return $this->set(self::ISPROXIFIED, $value);
    }

    /**
     * Returns value of 'IsProxified' property
     *
     * @return boolean
     */
    public function getIsProxified()
    {
        $value = $this->get(self::ISPROXIFIED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'ProxyBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyBoxId($value)
    {
        return $this->set(self::PROXYBOXID, $value);
    }

    /**
     * Returns value of 'ProxyBoxId' property
     *
     * @return string
     */
    public function getProxyBoxId()
    {
        $value = $this->get(self::PROXYBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ProxyTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyTitle($value)
    {
        return $this->set(self::PROXYTITLE, $value);
    }

    /**
     * Returns value of 'ProxyTitle' property
     *
     * @return string
     */
    public function getProxyTitle()
    {
        $value = $this->get(self::PROXYTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'PacketIsLocked' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPacketIsLocked($value)
    {
        return $this->set(self::PACKETISLOCKED, $value);
    }

    /**
     * Returns value of 'PacketIsLocked' property
     *
     * @return boolean
     */
    public function getPacketIsLocked()
    {
        $value = $this->get(self::PACKETISLOCKED);
        return $value === null ? (boolean)$value : $value;
    }
}
}