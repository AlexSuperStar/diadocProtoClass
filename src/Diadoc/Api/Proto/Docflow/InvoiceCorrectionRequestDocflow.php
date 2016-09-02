<?php
/**
 * Auto generated from InvoiceDocflow.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * InvoiceCorrectionRequestDocflow message
 */
class InvoiceCorrectionRequestDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const CORRECTIONREQUESTATTACHMENT = 2;
    const RECEIPTDOCFLOW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CORRECTIONREQUESTATTACHMENT => array(
            'name' => 'CorrectionRequestAttachment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\SignedAttachment'
        ),
        self::RECEIPTDOCFLOW => array(
            'name' => 'ReceiptDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\ReceiptDocflow'
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
        $this->values[self::CORRECTIONREQUESTATTACHMENT] = null;
        $this->values[self::RECEIPTDOCFLOW] = null;
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
     * Sets value of 'CorrectionRequestAttachment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setCorrectionRequestAttachment(\Diadoc\Api\Proto\Docflow\SignedAttachment $value=null)
    {
        return $this->set(self::CORRECTIONREQUESTATTACHMENT, $value);
    }

    /**
     * Returns value of 'CorrectionRequestAttachment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachment
     */
    public function getCorrectionRequestAttachment()
    {
        return $this->get(self::CORRECTIONREQUESTATTACHMENT);
    }

    /**
     * Sets value of 'ReceiptDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\ReceiptDocflow $value Property value
     *
     * @return null
     */
    public function setReceiptDocflow(\Diadoc\Api\Proto\Docflow\ReceiptDocflow $value=null)
    {
        return $this->set(self::RECEIPTDOCFLOW, $value);
    }

    /**
     * Returns value of 'ReceiptDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\ReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->get(self::RECEIPTDOCFLOW);
    }
}
}