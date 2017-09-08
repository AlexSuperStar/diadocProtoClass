<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceCorrectionTable message
 */
class InvoiceCorrectionTable extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMS = 1;
    const TOTALSINC = 2;
    const TOTALSDEC = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\ExtendedInvoiceCorrectionItem'
        ),
        self::TOTALSINC => array(
            'name' => 'TotalsInc',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff'
        ),
        self::TOTALSDEC => array(
            'name' => 'TotalsDec',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff'
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
        $this->values[self::TOTALSINC] = null;
        $this->values[self::TOTALSDEC] = null;
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
     * @param \Diadoc\Api\Proto\Invoicing\ExtendedInvoiceCorrectionItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\ExtendedInvoiceCorrectionItem $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\ExtendedInvoiceCorrectionItem[]
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
     * @return \Diadoc\Api\Proto\Invoicing\ExtendedInvoiceCorrectionItem
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
     * Sets value of 'TotalsInc' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value Property value
     *
     * @return null
     */
    public function setTotalsInc(\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value=null)
    {
        return $this->set(self::TOTALSINC, $value);
    }

    /**
     * Returns value of 'TotalsInc' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff
     */
    public function getTotalsInc()
    {
        return $this->get(self::TOTALSINC);
    }

    /**
     * Sets value of 'TotalsDec' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value Property value
     *
     * @return null
     */
    public function setTotalsDec(\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value=null)
    {
        return $this->set(self::TOTALSDEC, $value);
    }

    /**
     * Returns value of 'TotalsDec' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff
     */
    public function getTotalsDec()
    {
        return $this->get(self::TOTALSDEC);
    }
}
}