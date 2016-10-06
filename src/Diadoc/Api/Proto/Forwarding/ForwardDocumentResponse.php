<?php
/**
 * Auto generated from ForwardingApi.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * ForwardDocumentResponse message
 */
class ForwardDocumentResponse extends \ProtobufMessage
{
    /* Field index constants */
    const FORWARDTIMESTAMP = 1;
    const FORWARDEDDOCUMENTID = 2;

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
}
}