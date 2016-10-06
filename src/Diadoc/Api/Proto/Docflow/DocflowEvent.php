<?php
/**
 * Auto generated from DocflowApi.proto at 2016-10-06 18:03:23
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * DocflowEvent message
 */
class DocflowEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENTID = 1;
    const TIMESTAMP = 2;
    const DOCUMENTID = 3;
    const INDEXKEY = 4;
    const DOCUMENT = 5;
    const PREVIOUSEVENTID = 6;
    const PREVIOUSDOCUMENTSTATE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENTID => array(
            'name' => 'EventId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMESTAMP => array(
            'name' => 'Timestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENT => array(
            'name' => 'Document',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentWithDocflow'
        ),
        self::PREVIOUSEVENTID => array(
            'name' => 'PreviousEventId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PREVIOUSDOCUMENTSTATE => array(
            'name' => 'PreviousDocumentState',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentWithDocflow'
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
        $this->values[self::EVENTID] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::INDEXKEY] = null;
        $this->values[self::DOCUMENT] = null;
        $this->values[self::PREVIOUSEVENTID] = null;
        $this->values[self::PREVIOUSDOCUMENTSTATE] = null;
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
     * Sets value of 'EventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENTID, $value);
    }

    /**
     * Returns value of 'EventId' property
     *
     * @return string
     */
    public function getEventId()
    {
        $value = $this->get(self::EVENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Timestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'Timestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getTimestamp()
    {
        return $this->get(self::TIMESTAMP);
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
     * Sets value of 'Document' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value Property value
     *
     * @return null
     */
    public function setDocument(\Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value=null)
    {
        return $this->set(self::DOCUMENT, $value);
    }

    /**
     * Returns value of 'Document' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocument()
    {
        return $this->get(self::DOCUMENT);
    }

    /**
     * Sets value of 'PreviousEventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPreviousEventId($value)
    {
        return $this->set(self::PREVIOUSEVENTID, $value);
    }

    /**
     * Returns value of 'PreviousEventId' property
     *
     * @return string
     */
    public function getPreviousEventId()
    {
        $value = $this->get(self::PREVIOUSEVENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'PreviousDocumentState' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value Property value
     *
     * @return null
     */
    public function setPreviousDocumentState(\Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value=null)
    {
        return $this->set(self::PREVIOUSDOCUMENTSTATE, $value);
    }

    /**
     * Returns value of 'PreviousDocumentState' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow
     */
    public function getPreviousDocumentState()
    {
        return $this->get(self::PREVIOUSDOCUMENTSTATE);
    }
}
}