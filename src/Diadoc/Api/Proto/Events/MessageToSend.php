<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * MessageToSend message
 */
class MessageToSend extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const MESSAGEID = 2;
    const DOCUMENTSIGNATURES = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTSIGNATURES => array(
            'name' => 'DocumentSignatures',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\DocumentSignature'
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
        $this->values[self::MESSAGEID] = null;
        $this->values[self::DOCUMENTSIGNATURES] = array();
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
     * Appends value to 'DocumentSignatures' list
     *
     * @param \Diadoc\Api\Proto\Events\DocumentSignature $value Value to append
     *
     * @return null
     */
    public function appendDocumentSignatures(\Diadoc\Api\Proto\Events\DocumentSignature $value)
    {
        return $this->append(self::DOCUMENTSIGNATURES, $value);
    }

    /**
     * Clears 'DocumentSignatures' list
     *
     * @return null
     */
    public function clearDocumentSignatures()
    {
        return $this->clear(self::DOCUMENTSIGNATURES);
    }

    /**
     * Returns 'DocumentSignatures' list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentSignature[]
     */
    public function getDocumentSignatures()
    {
        return $this->get(self::DOCUMENTSIGNATURES);
    }

    /**
     * Returns 'DocumentSignatures' iterator
     *
     * @return \ArrayIterator
     */
    public function getDocumentSignaturesIterator()
    {
        return new \ArrayIterator($this->get(self::DOCUMENTSIGNATURES));
    }

    /**
     * Returns element from 'DocumentSignatures' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentSignature
     */
    public function getDocumentSignaturesAt($offset)
    {
        return $this->get(self::DOCUMENTSIGNATURES, $offset);
    }

    /**
     * Returns count of 'DocumentSignatures' list
     *
     * @return int
     */
    public function getDocumentSignaturesCount()
    {
        return $this->count(self::DOCUMENTSIGNATURES);
    }
}
}