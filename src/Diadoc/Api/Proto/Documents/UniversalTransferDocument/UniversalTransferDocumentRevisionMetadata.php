<?php
/**
* Auto generated from UniversalTransferDocument.proto
*
 * Diadoc.Api.Proto.Documents.UniversalTransferDocument package
 */

namespace Diadoc\Api\Proto\Documents\UniversalTransferDocument {
/**
 * UniversalTransferDocumentRevisionMetadata message
 */
class UniversalTransferDocumentRevisionMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTAL = 2;
    const VAT = 3;
    const GROUNDS = 4;
    const DOCUMENTFUNCTION = 5;
    const CURRENCY = 6;
    const CONFIRMATIONDATETIMETICKS = 7;
    const INVOICEAMENDMENTFLAGS = 8;
    const ORIGINALINVOICENUMBER = 9;
    const ORIGINALINVOICEDATE = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'name' => 'DocumentStatus',
            'required' => true,
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
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ORIGINALINVOICENUMBER => array(
            'name' => 'OriginalInvoiceNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINALINVOICEDATE => array(
            'name' => 'OriginalInvoiceDate',
            'required' => true,
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
        $this->values[self::DOCUMENTSTATUS] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::DOCUMENTFUNCTION] = null;
        $this->values[self::CURRENCY] = null;
        $this->values[self::CONFIRMATIONDATETIMETICKS] = null;
        $this->values[self::INVOICEAMENDMENTFLAGS] = null;
        $this->values[self::ORIGINALINVOICENUMBER] = null;
        $this->values[self::ORIGINALINVOICEDATE] = null;
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

    /**
     * Sets value of 'OriginalInvoiceNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceNumber($value)
    {
        return $this->set(self::ORIGINALINVOICENUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceNumber' property
     *
     * @return string
     */
    public function getOriginalInvoiceNumber()
    {
        $value = $this->get(self::ORIGINALINVOICENUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OriginalInvoiceDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceDate($value)
    {
        return $this->set(self::ORIGINALINVOICEDATE, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceDate' property
     *
     * @return string
     */
    public function getOriginalInvoiceDate()
    {
        $value = $this->get(self::ORIGINALINVOICEDATE);
        return $value === null ? (string)$value : $value;
    }
}
}