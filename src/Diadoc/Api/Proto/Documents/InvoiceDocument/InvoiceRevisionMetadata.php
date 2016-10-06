<?php
/**
 * Auto generated from InvoiceDocument.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents.InvoiceDocument package
 */

namespace Diadoc\Api\Proto\Documents\InvoiceDocument {
/**
 * InvoiceRevisionMetadata message
 */
class InvoiceRevisionMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICEREVISIONSTATUS = 1;
    const ORIGINALINVOICENUMBER = 2;
    const ORIGINALINVOICEDATE = 3;
    const TOTAL = 4;
    const VAT = 5;
    const CURRENCY = 6;
    const CONFIRMATIONDATETIMETICKS = 7;
    const INVOICEAMENDMENTFLAGS = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICEREVISIONSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus,
            'name' => 'InvoiceRevisionStatus',
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
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
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
        $this->values[self::INVOICEREVISIONSTATUS] = self::$fields[self::INVOICEREVISIONSTATUS]['default'];
        $this->values[self::ORIGINALINVOICENUMBER] = null;
        $this->values[self::ORIGINALINVOICEDATE] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
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
     * Sets value of 'InvoiceRevisionStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionStatus($value)
    {
        return $this->set(self::INVOICEREVISIONSTATUS, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionStatus' property
     *
     * @return integer
     */
    public function getInvoiceRevisionStatus()
    {
        $value = $this->get(self::INVOICEREVISIONSTATUS);
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