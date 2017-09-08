<?php
/**
* Auto generated from BilateralDocflow.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * BilateralDocflow message
 */
class BilateralDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTDOCFLOW = 2;
    const RECIPIENTSIGNATUREDOCFLOW = 3;
    const RECIPIENTSIGNATUREREJECTIONDOCFLOW = 4;
    const ISRECEIPTREQUESTED = 5;
    const ISRECIPIENTSIGNATUREREQUESTED = 6;
    const ISDOCUMENTSIGNEDBYRECIPIENT = 7;
    const ISDOCUMENTREJECTEDBYRECIPIENT = 8;
    const CANDOCUMENTBERECEIPTED = 9;
    const CANDOCUMENTBESIGNEDBYSENDER = 10;
    const CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT = 11;

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
        self::RECIPIENTSIGNATUREDOCFLOW => array(
            'name' => 'RecipientSignatureDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow'
        ),
        self::RECIPIENTSIGNATUREREJECTIONDOCFLOW => array(
            'name' => 'RecipientSignatureRejectionDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow'
        ),
        self::ISRECEIPTREQUESTED => array(
            'name' => 'IsReceiptRequested',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISRECIPIENTSIGNATUREREQUESTED => array(
            'name' => 'IsRecipientSignatureRequested',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISDOCUMENTSIGNEDBYRECIPIENT => array(
            'name' => 'IsDocumentSignedByRecipient',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISDOCUMENTREJECTEDBYRECIPIENT => array(
            'name' => 'IsDocumentRejectedByRecipient',
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
        self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT => array(
            'name' => 'CanDocumentBeSignedOrRejectedByRecipient',
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
        $this->values[self::RECIPIENTSIGNATUREDOCFLOW] = null;
        $this->values[self::RECIPIENTSIGNATUREREJECTIONDOCFLOW] = null;
        $this->values[self::ISRECEIPTREQUESTED] = null;
        $this->values[self::ISRECIPIENTSIGNATUREREQUESTED] = null;
        $this->values[self::ISDOCUMENTSIGNEDBYRECIPIENT] = null;
        $this->values[self::ISDOCUMENTREJECTEDBYRECIPIENT] = null;
        $this->values[self::CANDOCUMENTBERECEIPTED] = null;
        $this->values[self::CANDOCUMENTBESIGNEDBYSENDER] = null;
        $this->values[self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT] = null;
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
     * Sets value of 'RecipientSignatureDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow $value Property value
     *
     * @return null
     */
    public function setRecipientSignatureDocflow(\Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow $value=null)
    {
        return $this->set(self::RECIPIENTSIGNATUREDOCFLOW, $value);
    }

    /**
     * Returns value of 'RecipientSignatureDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow
     */
    public function getRecipientSignatureDocflow()
    {
        return $this->get(self::RECIPIENTSIGNATUREDOCFLOW);
    }

    /**
     * Sets value of 'RecipientSignatureRejectionDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $value Property value
     *
     * @return null
     */
    public function setRecipientSignatureRejectionDocflow(\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $value=null)
    {
        return $this->set(self::RECIPIENTSIGNATUREREJECTIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'RecipientSignatureRejectionDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow
     */
    public function getRecipientSignatureRejectionDocflow()
    {
        return $this->get(self::RECIPIENTSIGNATUREREJECTIONDOCFLOW);
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
     * Sets value of 'IsRecipientSignatureRequested' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsRecipientSignatureRequested($value)
    {
        return $this->set(self::ISRECIPIENTSIGNATUREREQUESTED, $value);
    }

    /**
     * Returns value of 'IsRecipientSignatureRequested' property
     *
     * @return boolean
     */
    public function getIsRecipientSignatureRequested()
    {
        $value = $this->get(self::ISRECIPIENTSIGNATUREREQUESTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsDocumentSignedByRecipient' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDocumentSignedByRecipient($value)
    {
        return $this->set(self::ISDOCUMENTSIGNEDBYRECIPIENT, $value);
    }

    /**
     * Returns value of 'IsDocumentSignedByRecipient' property
     *
     * @return boolean
     */
    public function getIsDocumentSignedByRecipient()
    {
        $value = $this->get(self::ISDOCUMENTSIGNEDBYRECIPIENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsDocumentRejectedByRecipient' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDocumentRejectedByRecipient($value)
    {
        return $this->set(self::ISDOCUMENTREJECTEDBYRECIPIENT, $value);
    }

    /**
     * Returns value of 'IsDocumentRejectedByRecipient' property
     *
     * @return boolean
     */
    public function getIsDocumentRejectedByRecipient()
    {
        $value = $this->get(self::ISDOCUMENTREJECTEDBYRECIPIENT);
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

    /**
     * Sets value of 'CanDocumentBeSignedOrRejectedByRecipient' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeSignedOrRejectedByRecipient($value)
    {
        return $this->set(self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT, $value);
    }

    /**
     * Returns value of 'CanDocumentBeSignedOrRejectedByRecipient' property
     *
     * @return boolean
     */
    public function getCanDocumentBeSignedOrRejectedByRecipient()
    {
        $value = $this->get(self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT);
        return $value === null ? (boolean)$value : $value;
    }
}
}