<?php
/**
 * Auto generated from ForwardingApi.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * ForwardedDocumentEvent message
 */
class ForwardedDocumentEvent extends \ProtobufMessage
{
    /* Field index constants */
    const TIMESTAMP = 1;
    const FORWARDEDDOCUMENTID = 2;
    const INDEXKEY = 3;
    const FORWARDEDDOCUMENT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TIMESTAMP => array(
            'name' => 'Timestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::FORWARDEDDOCUMENTID => array(
            'name' => 'ForwardedDocumentId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId'
        ),
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FORWARDEDDOCUMENT => array(
            'name' => 'ForwardedDocument',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Forwarding\ForwardedDocument'
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
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::FORWARDEDDOCUMENTID] = null;
        $this->values[self::INDEXKEY] = null;
        $this->values[self::FORWARDEDDOCUMENT] = null;
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
     * Sets value of 'ForwardedDocumentId' property
     *
     * @param \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $value Property value
     *
     * @return null
     */
    public function setForwardedDocumentId(\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $value=null)
    {
        return $this->set(self::FORWARDEDDOCUMENTID, $value);
    }

    /**
     * Returns value of 'ForwardedDocumentId' property
     *
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId
     */
    public function getForwardedDocumentId()
    {
        return $this->get(self::FORWARDEDDOCUMENTID);
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
     * Sets value of 'ForwardedDocument' property
     *
     * @param \Diadoc\Api\Proto\Forwarding\ForwardedDocument $value Property value
     *
     * @return null
     */
    public function setForwardedDocument(\Diadoc\Api\Proto\Forwarding\ForwardedDocument $value=null)
    {
        return $this->set(self::FORWARDEDDOCUMENT, $value);
    }

    /**
     * Returns value of 'ForwardedDocument' property
     *
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocument
     */
    public function getForwardedDocument()
    {
        return $this->get(self::FORWARDEDDOCUMENT);
    }
}
}