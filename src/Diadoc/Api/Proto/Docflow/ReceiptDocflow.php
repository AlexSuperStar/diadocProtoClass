<?php
/**
 * Auto generated from ReceiptDocflow.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * ReceiptDocflow message
 */
class ReceiptDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTATTACHMENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::RECEIPTATTACHMENT => array(
            'name' => 'ReceiptAttachment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\SignedAttachment'
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
        $this->values[self::RECEIPTATTACHMENT] = null;
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
     * Sets value of 'ReceiptAttachment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setReceiptAttachment(\Diadoc\Api\Proto\Docflow\SignedAttachment $value=null)
    {
        return $this->set(self::RECEIPTATTACHMENT, $value);
    }

    /**
     * Returns value of 'ReceiptAttachment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachment
     */
    public function getReceiptAttachment()
    {
        return $this->get(self::RECEIPTATTACHMENT);
    }
}
}