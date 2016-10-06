<?php
/**
 * Auto generated from DocumentsMoveOperation.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * DocumentsMoveOperation message
 */
class DocumentsMoveOperation extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const TODEPARTMENTID = 2;
    const DOCUMENTIDS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TODEPARTMENTID => array(
            'name' => 'ToDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTIDS => array(
            'name' => 'DocumentIds',
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
        $this->values[self::BOXID] = null;
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::DOCUMENTIDS] = array();
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        $value = $this->get(self::BOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ToDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToDepartmentId($value)
    {
        return $this->set(self::TODEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ToDepartmentId' property
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        $value = $this->get(self::TODEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'DocumentIds' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendDocumentIds(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::DOCUMENTIDS, $value);
    }

    /**
     * Clears 'DocumentIds' list
     *
     * @return null
     */
    public function clearDocumentIds()
    {
        return $this->clear(self::DOCUMENTIDS);
    }

    /**
     * Returns 'DocumentIds' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getDocumentIds()
    {
        return $this->get(self::DOCUMENTIDS);
    }

    /**
     * Returns 'DocumentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::DOCUMENTIDS));
    }

    /**
     * Returns element from 'DocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getDocumentIdsAt($offset)
    {
        return $this->get(self::DOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'DocumentIds' list
     *
     * @return int
     */
    public function getDocumentIdsCount()
    {
        return $this->count(self::DOCUMENTIDS);
    }
}
}