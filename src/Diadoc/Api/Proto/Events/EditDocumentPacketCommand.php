<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EditDocumentPacketCommand message
 */
class EditDocumentPacketCommand extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTID = 1;
    const ADDDOCUMENTSTOPACKET = 2;
    const REMOVEDOCUMENTSFROMPACKET = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDDOCUMENTSTOPACKET => array(
            'name' => 'AddDocumentsToPacket',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::REMOVEDOCUMENTSFROMPACKET => array(
            'name' => 'RemoveDocumentsFromPacket',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::ADDDOCUMENTSTOPACKET] = array();
        $this->values[self::REMOVEDOCUMENTSFROMPACKET] = array();
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
     * Sets value of 'DocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentId($value)
    {
        return $this->set(self::DOCUMENTID, $value);
    }

    /**
     * Returns value of 'DocumentId' property
     *
     * @return string
     */
    public function getDocumentId()
    {
        $value = $this->get(self::DOCUMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'AddDocumentsToPacket' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendAddDocumentsToPacket(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::ADDDOCUMENTSTOPACKET, $value);
    }

    /**
     * Clears 'AddDocumentsToPacket' list
     *
     * @return null
     */
    public function clearAddDocumentsToPacket()
    {
        return $this->clear(self::ADDDOCUMENTSTOPACKET);
    }

    /**
     * Returns 'AddDocumentsToPacket' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getAddDocumentsToPacket()
    {
        return $this->get(self::ADDDOCUMENTSTOPACKET);
    }

    /**
     * Returns 'AddDocumentsToPacket' iterator
     *
     * @return \ArrayIterator
     */
    public function getAddDocumentsToPacketIterator()
    {
        return new \ArrayIterator($this->get(self::ADDDOCUMENTSTOPACKET));
    }

    /**
     * Returns element from 'AddDocumentsToPacket' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getAddDocumentsToPacketAt($offset)
    {
        return $this->get(self::ADDDOCUMENTSTOPACKET, $offset);
    }

    /**
     * Returns count of 'AddDocumentsToPacket' list
     *
     * @return int
     */
    public function getAddDocumentsToPacketCount()
    {
        return $this->count(self::ADDDOCUMENTSTOPACKET);
    }

    /**
     * Appends value to 'RemoveDocumentsFromPacket' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendRemoveDocumentsFromPacket(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::REMOVEDOCUMENTSFROMPACKET, $value);
    }

    /**
     * Clears 'RemoveDocumentsFromPacket' list
     *
     * @return null
     */
    public function clearRemoveDocumentsFromPacket()
    {
        return $this->clear(self::REMOVEDOCUMENTSFROMPACKET);
    }

    /**
     * Returns 'RemoveDocumentsFromPacket' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getRemoveDocumentsFromPacket()
    {
        return $this->get(self::REMOVEDOCUMENTSFROMPACKET);
    }

    /**
     * Returns 'RemoveDocumentsFromPacket' iterator
     *
     * @return \ArrayIterator
     */
    public function getRemoveDocumentsFromPacketIterator()
    {
        return new \ArrayIterator($this->get(self::REMOVEDOCUMENTSFROMPACKET));
    }

    /**
     * Returns element from 'RemoveDocumentsFromPacket' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getRemoveDocumentsFromPacketAt($offset)
    {
        return $this->get(self::REMOVEDOCUMENTSFROMPACKET, $offset);
    }

    /**
     * Returns count of 'RemoveDocumentsFromPacket' list
     *
     * @return int
     */
    public function getRemoveDocumentsFromPacketCount()
    {
        return $this->count(self::REMOVEDOCUMENTSFROMPACKET);
    }
}
}