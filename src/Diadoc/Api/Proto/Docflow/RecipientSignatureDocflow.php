<?php
/**
 * Auto generated from RecipientSignatureDocflow.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * RecipientSignatureDocflow message
 */
class RecipientSignatureDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECIPIENTSIGNATURE = 2;
    const DELIVERYTIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::RECIPIENTSIGNATURE => array(
            'name' => 'RecipientSignature',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\Signature'
        ),
        self::DELIVERYTIMESTAMP => array(
            'name' => 'DeliveryTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
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
        $this->values[self::ISFINISHED] = null;
        $this->values[self::RECIPIENTSIGNATURE] = null;
        $this->values[self::DELIVERYTIMESTAMP] = null;
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
     * Sets value of 'IsFinished' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsFinished($value)
    {
        return $this->set(self::ISFINISHED, $value);
    }

    /**
     * Returns value of 'IsFinished' property
     *
     * @return boolean
     */
    public function getIsFinished()
    {
        $value = $this->get(self::ISFINISHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'RecipientSignature' property
     *
     * @param \Diadoc\Api\Proto\Docflow\Signature $value Property value
     *
     * @return null
     */
    public function setRecipientSignature(\Diadoc\Api\Proto\Docflow\Signature $value=null)
    {
        return $this->set(self::RECIPIENTSIGNATURE, $value);
    }

    /**
     * Returns value of 'RecipientSignature' property
     *
     * @return \Diadoc\Api\Proto\Docflow\Signature
     */
    public function getRecipientSignature()
    {
        return $this->get(self::RECIPIENTSIGNATURE);
    }

    /**
     * Sets value of 'DeliveryTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setDeliveryTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::DELIVERYTIMESTAMP, $value);
    }

    /**
     * Returns value of 'DeliveryTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getDeliveryTimestamp()
    {
        return $this->get(self::DELIVERYTIMESTAMP);
    }
}
}