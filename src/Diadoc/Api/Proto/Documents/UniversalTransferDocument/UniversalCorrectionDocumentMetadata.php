<?php
/**
* Auto generated from UniversalTransferDocument.proto
*
 * Diadoc.Api.Proto.Documents.UniversalTransferDocument package
 */

namespace Diadoc\Api\Proto\Documents\UniversalTransferDocument {
/**
 * UniversalCorrectionDocumentMetadata message
 */
class UniversalCorrectionDocumentMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTALINC = 2;
    const TOTALDEC = 3;
    const VATINC = 4;
    const VATDEC = 5;
    const GROUNDS = 6;
    const DOCUMENTFUNCTION = 7;
    const CURRENCY = 8;
    const CONFIRMATIONDATETIMETICKS = 9;
    const INVOICEAMENDMENTFLAGS = 10;
    const ORIGINALINVOICENUMBER = 11;
    const ORIGINALINVOICEDATE = 12;
    const ORIGINALINVOICEREVISIONNUMBER = 13;
    const ORIGINALINVOICEREVISIONDATE = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'name' => 'DocumentStatus',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
            'required' => true,
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
        $this->values[self::TOTALINC] = null;
        $this->values[self::TOTALDEC] = null;
        $this->values[self::VATINC] = null;
        $this->values[self::VATDEC] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::DOCUMENTFUNCTION] = null;
        $this->values[self::CURRENCY] = null;
        $this->values[self::CONFIRMATIONDATETIMETICKS] = null;
        $this->values[self::INVOICEAMENDMENTFLAGS] = null;
        $this->values[self::ORIGINALINVOICENUMBER] = null;
        $this->values[self::ORIGINALINVOICEDATE] = null;
        $this->values[self::ORIGINALINVOICEREVISIONNUMBER] = null;
        $this->values[self::ORIGINALINVOICEREVISIONDATE] = null;
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
}
}