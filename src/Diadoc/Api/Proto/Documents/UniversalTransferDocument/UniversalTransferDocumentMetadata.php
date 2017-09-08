<?php
/**
* Auto generated from UniversalTransferDocument.proto
*
 * Diadoc.Api.Proto.Documents.UniversalTransferDocument package
 */

namespace Diadoc\Api\Proto\Documents\UniversalTransferDocument {
/**
 * UniversalTransferDocumentMetadata message
 */
class UniversalTransferDocumentMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTAL = 2;
    const VAT = 3;
    const GROUNDS = 4;
    const DOCUMENTFUNCTION = 5;
    const CURRENCY = 6;
    const CONFIRMATIONDATETIMETICKS = 8;
    const INVOICEAMENDMENTFLAGS = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus::UnknownDocumentStatus,
            'name' => 'DocumentStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTFUNCTION => array(
            'name' => 'DocumentFunction',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENCY => array(
            'name' => 'Currency',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFIRMATIONDATETIMETICKS => array(
            'name' => 'ConfirmationDateTimeTicks',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::INVOICEAMENDMENTFLAGS => array(
            'name' => 'InvoiceAmendmentFlags',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::DOCUMENTSTATUS] = self::$fields[self::DOCUMENTSTATUS]['default'];
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::DOCUMENTFUNCTION] = null;
        $this->values[self::CURRENCY] = null;
        $this->values[self::CONFIRMATIONDATETIMETICKS] = null;
        $this->values[self::INVOICEAMENDMENTFLAGS] = null;
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
     * Sets value of 'DocumentStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDocumentStatus($value)
    {
        return $this->set(self::DOCUMENTSTATUS, $value);
    }

    /**
     * Returns value of 'DocumentStatus' property
     *
     * @return integer
     */
    public function getDocumentStatus()
    {
        $value = $this->get(self::DOCUMENTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Total' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotal($value)
    {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'Total' property
     *
     * @return string
     */
    public function getTotal()
    {
        $value = $this->get(self::TOTAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Vat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVat($value)
    {
        return $this->set(self::VAT, $value);
    }

    /**
     * Returns value of 'Vat' property
     *
     * @return string
     */
    public function getVat()
    {
        $value = $this->get(self::VAT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Grounds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrounds($value)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return string
     */
    public function getGrounds()
    {
        $value = $this->get(self::GROUNDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentFunction' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentFunction($value)
    {
        return $this->set(self::DOCUMENTFUNCTION, $value);
    }

    /**
     * Returns value of 'DocumentFunction' property
     *
     * @return string
     */
    public function getDocumentFunction()
    {
        $value = $this->get(self::DOCUMENTFUNCTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Currency' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrency($value)
    {
        return $this->set(self::CURRENCY, $value);
    }

    /**
     * Returns value of 'Currency' property
     *
     * @return integer
     */
    public function getCurrency()
    {
        $value = $this->get(self::CURRENCY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'ConfirmationDateTimeTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfirmationDateTimeTicks($value)
    {
        return $this->set(self::CONFIRMATIONDATETIMETICKS, $value);
    }

    /**
     * Returns value of 'ConfirmationDateTimeTicks' property
     *
     * @return integer
     */
    public function getConfirmationDateTimeTicks()
    {
        $value = $this->get(self::CONFIRMATIONDATETIMETICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'InvoiceAmendmentFlags' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvoiceAmendmentFlags($value)
    {
        return $this->set(self::INVOICEAMENDMENTFLAGS, $value);
    }

    /**
     * Returns value of 'InvoiceAmendmentFlags' property
     *
     * @return integer
     */
    public function getInvoiceAmendmentFlags()
    {
        $value = $this->get(self::INVOICEAMENDMENTFLAGS);
        return $value === null ? (integer)$value : $value;
    }
}
}