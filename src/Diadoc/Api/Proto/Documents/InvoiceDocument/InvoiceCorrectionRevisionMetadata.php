<?php
/**
* Auto generated from InvoiceDocument.proto
*
 * Diadoc.Api.Proto.Documents.InvoiceDocument package
 */

namespace Diadoc\Api\Proto\Documents\InvoiceDocument {
/**
 * InvoiceCorrectionRevisionMetadata message
 */
class InvoiceCorrectionRevisionMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICECORRECTIONREVISIONSTATUS = 1;
    const ORIGINALINVOICENUMBER = 2;
    const ORIGINALINVOICEDATE = 3;
    const ORIGINALINVOICEREVISIONNUMBER = 4;
    const ORIGINALINVOICEREVISIONDATE = 5;
    const ORIGINALINVOICECORRECTIONNUMBER = 6;
    const ORIGINALINVOICECORRECTIONDATE = 7;
    const TOTALINC = 8;
    const TOTALDEC = 9;
    const VATINC = 10;
    const VATDEC = 11;
    const CURRENCY = 12;
    const CONFIRMATIONDATETIMETICKS = 13;
    const INVOICEAMENDMENTFLAGS = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICECORRECTIONREVISIONSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus,
            'name' => 'InvoiceCorrectionRevisionStatus',
            'required' => false,
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
        self::ORIGINALINVOICEREVISIONNUMBER => array(
            'name' => 'OriginalInvoiceRevisionNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINALINVOICEREVISIONDATE => array(
            'name' => 'OriginalInvoiceRevisionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINALINVOICECORRECTIONNUMBER => array(
            'name' => 'OriginalInvoiceCorrectionNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINALINVOICECORRECTIONDATE => array(
            'name' => 'OriginalInvoiceCorrectionDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALINC => array(
            'name' => 'TotalInc',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALDEC => array(
            'name' => 'TotalDec',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VATINC => array(
            'name' => 'VatInc',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VATDEC => array(
            'name' => 'VatDec',
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
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::INVOICEAMENDMENTFLAGS => array(
            'name' => 'InvoiceAmendmentFlags',
            'required' => true,
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
        $this->values[self::INVOICECORRECTIONREVISIONSTATUS] = self::$fields[self::INVOICECORRECTIONREVISIONSTATUS]['default'];
        $this->values[self::ORIGINALINVOICENUMBER] = null;
        $this->values[self::ORIGINALINVOICEDATE] = null;
        $this->values[self::ORIGINALINVOICEREVISIONNUMBER] = null;
        $this->values[self::ORIGINALINVOICEREVISIONDATE] = null;
        $this->values[self::ORIGINALINVOICECORRECTIONNUMBER] = null;
        $this->values[self::ORIGINALINVOICECORRECTIONDATE] = null;
        $this->values[self::TOTALINC] = null;
        $this->values[self::TOTALDEC] = null;
        $this->values[self::VATINC] = null;
        $this->values[self::VATDEC] = null;
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
     * Sets value of 'InvoiceCorrectionRevisionStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionRevisionStatus($value)
    {
        return $this->set(self::INVOICECORRECTIONREVISIONSTATUS, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionRevisionStatus' property
     *
     * @return integer
     */
    public function getInvoiceCorrectionRevisionStatus()
    {
        $value = $this->get(self::INVOICECORRECTIONREVISIONSTATUS);
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

    /**
     * Sets value of 'OriginalInvoiceRevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceRevisionNumber($value)
    {
        return $this->set(self::ORIGINALINVOICEREVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceRevisionNumber' property
     *
     * @return string
     */
    public function getOriginalInvoiceRevisionNumber()
    {
        $value = $this->get(self::ORIGINALINVOICEREVISIONNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OriginalInvoiceRevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceRevisionDate($value)
    {
        return $this->set(self::ORIGINALINVOICEREVISIONDATE, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceRevisionDate' property
     *
     * @return string
     */
    public function getOriginalInvoiceRevisionDate()
    {
        $value = $this->get(self::ORIGINALINVOICEREVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OriginalInvoiceCorrectionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceCorrectionNumber($value)
    {
        return $this->set(self::ORIGINALINVOICECORRECTIONNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceCorrectionNumber' property
     *
     * @return string
     */
    public function getOriginalInvoiceCorrectionNumber()
    {
        $value = $this->get(self::ORIGINALINVOICECORRECTIONNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OriginalInvoiceCorrectionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceCorrectionDate($value)
    {
        return $this->set(self::ORIGINALINVOICECORRECTIONDATE, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceCorrectionDate' property
     *
     * @return string
     */
    public function getOriginalInvoiceCorrectionDate()
    {
        $value = $this->get(self::ORIGINALINVOICECORRECTIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TotalInc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalInc($value)
    {
        return $this->set(self::TOTALINC, $value);
    }

    /**
     * Returns value of 'TotalInc' property
     *
     * @return string
     */
    public function getTotalInc()
    {
        $value = $this->get(self::TOTALINC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TotalDec' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalDec($value)
    {
        return $this->set(self::TOTALDEC, $value);
    }

    /**
     * Returns value of 'TotalDec' property
     *
     * @return string
     */
    public function getTotalDec()
    {
        $value = $this->get(self::TOTALDEC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'VatInc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVatInc($value)
    {
        return $this->set(self::VATINC, $value);
    }

    /**
     * Returns value of 'VatInc' property
     *
     * @return string
     */
    public function getVatInc()
    {
        $value = $this->get(self::VATINC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'VatDec' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVatDec($value)
    {
        return $this->set(self::VATDEC, $value);
    }

    /**
     * Returns value of 'VatDec' property
     *
     * @return string
     */
    public function getVatDec()
    {
        $value = $this->get(self::VATDEC);
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