<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceTable message
 */
class InvoiceTable extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMS = 1;
    const TOTALWITHVATEXCLUDED = 2;
    const VAT = 3;
    const TOTAL = 4;
    const TOTALNET = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\ExtendedInvoiceItem'
        ),
        self::TOTALWITHVATEXCLUDED => array(
            'name' => 'TotalWithVatExcluded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALNET => array(
            'name' => 'TotalNet',
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
        $this->values[self::ITEMS] = array();
        $this->values[self::TOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::TOTALNET] = null;
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
     * Appends value to 'Items' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\ExtendedInvoiceItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\ExtendedInvoiceItem $value)
    {
        return $this->append(self::ITEMS, $value);
    }

    /**
     * Clears 'Items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::ITEMS);
    }

    /**
     * Returns 'Items' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\ExtendedInvoiceItem[]
     */
    public function getItems()
    {
        return $this->get(self::ITEMS);
    }

    /**
     * Returns 'Items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMS));
    }

    /**
     * Returns element from 'Items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\ExtendedInvoiceItem
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::ITEMS, $offset);
    }

    /**
     * Returns count of 'Items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::ITEMS);
    }

    /**
     * Sets value of 'TotalWithVatExcluded' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalWithVatExcluded($value)
    {
        return $this->set(self::TOTALWITHVATEXCLUDED, $value);
    }

    /**
     * Returns value of 'TotalWithVatExcluded' property
     *
     * @return string
     */
    public function getTotalWithVatExcluded()
    {
        $value = $this->get(self::TOTALWITHVATEXCLUDED);
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
     * Sets value of 'TotalNet' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalNet($value)
    {
        return $this->set(self::TOTALNET, $value);
    }

    /**
     * Returns value of 'TotalNet' property
     *
     * @return string
     */
    public function getTotalNet()
    {
        $value = $this->get(self::TOTALNET);
        return $value === null ? (string)$value : $value;
    }
}
}