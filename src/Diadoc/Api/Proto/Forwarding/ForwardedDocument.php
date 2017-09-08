<?php
/**
* Auto generated from ForwardedDocument.proto
*
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * ForwardedDocument message
 */
class ForwardedDocument extends \ProtobufMessage
{
    /* Field index constants */
    const FORWARDTIMESTAMP = 1;
    const FORWARDEDDOCUMENTID = 2;
    const DOCUMENTWITHDOCFLOW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FORWARDTIMESTAMP => array(
            'name' => 'ForwardTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::FORWARDEDDOCUMENTID => array(
            'name' => 'ForwardedDocumentId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId'
        ),
        self::DOCUMENTWITHDOCFLOW => array(
            'name' => 'DocumentWithDocflow',
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
        $this->values[self::FORWARDTIMESTAMP] = null;
        $this->values[self::FORWARDEDDOCUMENTID] = null;
        $this->values[self::DOCUMENTWITHDOCFLOW] = null;
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
     * Sets value of 'ForwardTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setForwardTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::FORWARDTIMESTAMP, $value);
    }

    /**
     * Returns value of 'ForwardTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getForwardTimestamp()
    {
        return $this->get(self::FORWARDTIMESTAMP);
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
     * Sets value of 'DocumentWithDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value Property value
     *
     * @return null
     */
    public function setDocumentWithDocflow(\Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value=null)
    {
        return $this->set(self::DOCUMENTWITHDOCFLOW, $value);
    }

    /**
     * Returns value of 'DocumentWithDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocumentWithDocflow()
    {
        return $this->get(self::DOCUMENTWITHDOCFLOW);
    }
}
}