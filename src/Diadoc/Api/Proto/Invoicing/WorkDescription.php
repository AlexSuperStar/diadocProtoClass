<?php
/**
* Auto generated from AcceptanceCertificateInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * WorkDescription message
 */
class WorkDescription extends \ProtobufMessage
{
    /* Field index constants */
    const STARTINGDATE = 1;
    const COMPLETIONDATE = 2;
    const TOTALWITHVATEXCLUDED = 3;
    const VAT = 4;
    const TOTAL = 5;
    const ITEMS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STARTINGDATE => array(
            'name' => 'StartingDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMPLETIONDATE => array(
            'name' => 'CompletionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALWITHVATEXCLUDED => array(
            'name' => 'TotalWithVatExcluded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\WorkItem'
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
        $this->values[self::STARTINGDATE] = null;
        $this->values[self::COMPLETIONDATE] = null;
        $this->values[self::TOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::ITEMS] = array();
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
     * Sets value of 'StartingDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartingDate($value)
    {
        return $this->set(self::STARTINGDATE, $value);
    }

    /**
     * Returns value of 'StartingDate' property
     *
     * @return string
     */
    public function getStartingDate()
    {
        $value = $this->get(self::STARTINGDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CompletionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCompletionDate($value)
    {
        return $this->set(self::COMPLETIONDATE, $value);
    }

    /**
     * Returns value of 'CompletionDate' property
     *
     * @return string
     */
    public function getCompletionDate()
    {
        $value = $this->get(self::COMPLETIONDATE);
        return $value === null ? (string)$value : $value;
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
     * Appends value to 'Items' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\WorkItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\WorkItem $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\WorkItem[]
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
     * @return \Diadoc\Api\Proto\Invoicing\WorkItem
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
}
}