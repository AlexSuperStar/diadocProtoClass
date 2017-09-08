<?php
/**
* Auto generated from InvoiceDocflow.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * OutboundInvoiceDocflow message
 */
class OutboundInvoiceDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTDOCFLOW = 2;
    const CONFIRMATIONDOCFLOW = 3;
    const CORRECTIONREQUESTDOCFLOW = 4;
    const CONFIRMATIONTIMESTAMP = 5;
    const ISAMENDMENTREQUESTED = 6;
    const ISREVISED = 7;
    const ISCORRECTED = 8;
    const CANDOCUMENTBESIGNEDBYSENDER = 9;

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
        self::CONFIRMATIONDOCFLOW => array(
            'name' => 'ConfirmationDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow'
        ),
        self::CORRECTIONREQUESTDOCFLOW => array(
            'name' => 'CorrectionRequestDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow'
        ),
        self::CONFIRMATIONTIMESTAMP => array(
            'name' => 'ConfirmationTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::ISAMENDMENTREQUESTED => array(
            'name' => 'IsAmendmentRequested',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISREVISED => array(
            'name' => 'IsRevised',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISCORRECTED => array(
            'name' => 'IsCorrected',
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
        $this->values[self::CONFIRMATIONDOCFLOW] = null;
        $this->values[self::CORRECTIONREQUESTDOCFLOW] = null;
        $this->values[self::CONFIRMATIONTIMESTAMP] = null;
        $this->values[self::ISAMENDMENTREQUESTED] = null;
        $this->values[self::ISREVISED] = null;
        $this->values[self::ISCORRECTED] = null;
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
     * Sets value of 'ConfirmationDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $value Property value
     *
     * @return null
     */
    public function setConfirmationDocflow(\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $value=null)
    {
        return $this->set(self::CONFIRMATIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'ConfirmationDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow
     */
    public function getConfirmationDocflow()
    {
        return $this->get(self::CONFIRMATIONDOCFLOW);
    }

    /**
     * Sets value of 'CorrectionRequestDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $value Property value
     *
     * @return null
     */
    public function setCorrectionRequestDocflow(\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $value=null)
    {
        return $this->set(self::CORRECTIONREQUESTDOCFLOW, $value);
    }

    /**
     * Returns value of 'CorrectionRequestDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow
     */
    public function getCorrectionRequestDocflow()
    {
        return $this->get(self::CORRECTIONREQUESTDOCFLOW);
    }

    /**
     * Sets value of 'ConfirmationTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setConfirmationTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::CONFIRMATIONTIMESTAMP, $value);
    }

    /**
     * Returns value of 'ConfirmationTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getConfirmationTimestamp()
    {
        return $this->get(self::CONFIRMATIONTIMESTAMP);
    }

    /**
     * Sets value of 'IsAmendmentRequested' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsAmendmentRequested($value)
    {
        return $this->set(self::ISAMENDMENTREQUESTED, $value);
    }

    /**
     * Returns value of 'IsAmendmentRequested' property
     *
     * @return boolean
     */
    public function getIsAmendmentRequested()
    {
        $value = $this->get(self::ISAMENDMENTREQUESTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsRevised' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsRevised($value)
    {
        return $this->set(self::ISREVISED, $value);
    }

    /**
     * Returns value of 'IsRevised' property
     *
     * @return boolean
     */
    public function getIsRevised()
    {
        $value = $this->get(self::ISREVISED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsCorrected' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsCorrected($value)
    {
        return $this->set(self::ISCORRECTED, $value);
    }

    /**
     * Returns value of 'IsCorrected' property
     *
     * @return boolean
     */
    public function getIsCorrected()
    {
        $value = $this->get(self::ISCORRECTED);
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