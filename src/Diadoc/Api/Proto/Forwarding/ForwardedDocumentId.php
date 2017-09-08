<?php
/**
* Auto generated from ForwardedDocument.proto
*
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * ForwardedDocumentId message
 */
class ForwardedDocumentId extends \ProtobufMessage
{
    /* Field index constants */
    const FROMBOXID = 1;
    const DOCUMENTID = 2;
    const FORWARDEVENTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROMBOXID => array(
            'name' => 'FromBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::FORWARDEVENTID => array(
            'name' => 'ForwardEventId',
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
        $this->values[self::FROMBOXID] = null;
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::FORWARDEVENTID] = null;
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
     * Sets value of 'DocumentId' property
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Property value
     *
     * @return null
     */
    public function setDocumentId(\Diadoc\Api\Proto\DocumentId $value=null)
    {
        return $this->set(self::DOCUMENTID, $value);
    }

    /**
     * Returns value of 'DocumentId' property
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->get(self::DOCUMENTID);
    }

    /**
     * Sets value of 'ForwardEventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setForwardEventId($value)
    {
        return $this->set(self::FORWARDEVENTID, $value);
    }

    /**
     * Returns value of 'ForwardEventId' property
     *
     * @return string
     */
    public function getForwardEventId()
    {
        $value = $this->get(self::FORWARDEVENTID);
        return $value === null ? (string)$value : $value;
    }
}
}