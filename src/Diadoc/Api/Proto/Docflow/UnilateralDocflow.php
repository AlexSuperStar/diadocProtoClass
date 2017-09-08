<?php
/**
* Auto generated from UnilateralDocflow.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * UnilateralDocflow message
 */
class UnilateralDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTDOCFLOW = 2;
    const ISRECEIPTREQUESTED = 3;
    const CANDOCUMENTBERECEIPTED = 4;
    const CANDOCUMENTBESIGNEDBYSENDER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::RECEIPTDOCFLOW => array(
            'name' => 'ReceiptDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\ReceiptDocflow'
        ),
        self::ISRECEIPTREQUESTED => array(
            'name' => 'IsReceiptRequested',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CANDOCUMENTBERECEIPTED => array(
            'name' => 'CanDocumentBeReceipted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CANDOCUMENTBESIGNEDBYSENDER => array(
            'name' => 'CanDocumentBeSignedBySender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::RECEIPTDOCFLOW] = null;
        $this->values[self::ISRECEIPTREQUESTED] = null;
        $this->values[self::CANDOCUMENTBERECEIPTED] = null;
        $this->values[self::CANDOCUMENTBESIGNEDBYSENDER] = null;
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

    /**
     * Sets value of 'IsReceiptRequested' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsReceiptRequested($value)
    {
        return $this->set(self::ISRECEIPTREQUESTED, $value);
    }

    /**
     * Returns value of 'IsReceiptRequested' property
     *
     * @return boolean
     */
    public function getIsReceiptRequested()
    {
        $value = $this->get(self::ISRECEIPTREQUESTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'CanDocumentBeReceipted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeReceipted($value)
    {
        return $this->set(self::CANDOCUMENTBERECEIPTED, $value);
    }

    /**
     * Returns value of 'CanDocumentBeReceipted' property
     *
     * @return boolean
     */
    public function getCanDocumentBeReceipted()
    {
        $value = $this->get(self::CANDOCUMENTBERECEIPTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'CanDocumentBeSignedBySender' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeSignedBySender($value)
    {
        return $this->set(self::CANDOCUMENTBESIGNEDBYSENDER, $value);
    }

    /**
     * Returns value of 'CanDocumentBeSignedBySender' property
     *
     * @return boolean
     */
    public function getCanDocumentBeSignedBySender()
    {
        $value = $this->get(self::CANDOCUMENTBESIGNEDBYSENDER);
        return $value === null ? (boolean)$value : $value;
    }
}
}