<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceRevisionInfo message
 */
class InvoiceRevisionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICEREVISIONDATE = 1;
    const INVOICEREVISIONNUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICEREVISIONDATE => array(
            'name' => 'InvoiceRevisionDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICEREVISIONNUMBER => array(
            'name' => 'InvoiceRevisionNumber',
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
        $this->values[self::INVOICEREVISIONDATE] = null;
        $this->values[self::INVOICEREVISIONNUMBER] = null;
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
     * Sets value of 'InvoiceRevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionDate($value)
    {
        return $this->set(self::INVOICEREVISIONDATE, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionDate' property
     *
     * @return string
     */
    public function getInvoiceRevisionDate()
    {
        $value = $this->get(self::INVOICEREVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceRevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionNumber($value)
    {
        return $this->set(self::INVOICEREVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionNumber' property
     *
     * @return string
     */
    public function getInvoiceRevisionNumber()
    {
        $value = $this->get(self::INVOICEREVISIONNUMBER);
        return $value === null ? (string)$value : $value;
    }
}
}