<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceForCorrectionInfo message
 */
class InvoiceForCorrectionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICEDATE = 1;
    const INVOICENUMBER = 2;
    const INVOICEREVISIONS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICEDATE => array(
            'name' => 'InvoiceDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICENUMBER => array(
            'name' => 'InvoiceNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICEREVISIONS => array(
            'name' => 'InvoiceRevisions',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo'
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
        $this->values[self::INVOICEDATE] = null;
        $this->values[self::INVOICENUMBER] = null;
        $this->values[self::INVOICEREVISIONS] = array();
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
     * Sets value of 'InvoiceDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceDate($value)
    {
        return $this->set(self::INVOICEDATE, $value);
    }

    /**
     * Returns value of 'InvoiceDate' property
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        $value = $this->get(self::INVOICEDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceNumber($value)
    {
        return $this->set(self::INVOICENUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceNumber' property
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        $value = $this->get(self::INVOICENUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'InvoiceRevisions' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo $value Value to append
     *
     * @return null
     */
    public function appendInvoiceRevisions(\Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo $value)
    {
        return $this->append(self::INVOICEREVISIONS, $value);
    }

    /**
     * Clears 'InvoiceRevisions' list
     *
     * @return null
     */
    public function clearInvoiceRevisions()
    {
        return $this->clear(self::INVOICEREVISIONS);
    }

    /**
     * Returns 'InvoiceRevisions' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo[]
     */
    public function getInvoiceRevisions()
    {
        return $this->get(self::INVOICEREVISIONS);
    }

    /**
     * Returns 'InvoiceRevisions' iterator
     *
     * @return \ArrayIterator
     */
    public function getInvoiceRevisionsIterator()
    {
        return new \ArrayIterator($this->get(self::INVOICEREVISIONS));
    }

    /**
     * Returns element from 'InvoiceRevisions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo
     */
    public function getInvoiceRevisionsAt($offset)
    {
        return $this->get(self::INVOICEREVISIONS, $offset);
    }

    /**
     * Returns count of 'InvoiceRevisions' list
     *
     * @return int
     */
    public function getInvoiceRevisionsCount()
    {
        return $this->count(self::INVOICEREVISIONS);
    }
}
}