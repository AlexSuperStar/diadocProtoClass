<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionChainAssignment message
 */
class ResolutionChainAssignment extends \ProtobufMessage
{
    /* Field index constants */
    const INITIALDOCUMENTID = 1;
    const CHAINID = 2;
    const COMMENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INITIALDOCUMENTID => array(
            'name' => 'InitialDocumentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHAINID => array(
            'name' => 'ChainId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMMENT => array(
            'name' => 'Comment',
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
        $this->values[self::INITIALDOCUMENTID] = null;
        $this->values[self::CHAINID] = null;
        $this->values[self::COMMENT] = null;
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
     * Sets value of 'InitialDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialDocumentId($value)
    {
        return $this->set(self::INITIALDOCUMENTID, $value);
    }

    /**
     * Returns value of 'InitialDocumentId' property
     *
     * @return string
     */
    public function getInitialDocumentId()
    {
        $value = $this->get(self::INITIALDOCUMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ChainId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChainId($value)
    {
        return $this->set(self::CHAINID, $value);
    }

    /**
     * Returns value of 'ChainId' property
     *
     * @return string
     */
    public function getChainId()
    {
        $value = $this->get(self::CHAINID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::COMMENT);
        return $value === null ? (string)$value : $value;
    }
}
}