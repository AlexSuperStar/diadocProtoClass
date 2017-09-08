<?php
/**
* Auto generated from TovTorgInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * TovTorgTable message
 */
class TovTorgTable extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMS = 1;
    const TOTALQUANTITY = 2;
    const TOTALGROSS = 3;
    const TOTALNET = 4;
    const TOTALWITHVATEXCLUDED = 5;
    const TOTALVAT = 6;
    const TOTAL = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\TovTorgItem'
        ),
        self::TOTALQUANTITY => array(
            'name' => 'TotalQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALGROSS => array(
            'name' => 'TotalGross',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALNET => array(
            'name' => 'TotalNet',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALWITHVATEXCLUDED => array(
            'name' => 'TotalWithVatExcluded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALVAT => array(
            'name' => 'TotalVat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTAL => array(
            'name' => 'Total',
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
        $this->values[self::TOTALQUANTITY] = null;
        $this->values[self::TOTALGROSS] = null;
        $this->values[self::TOTALNET] = null;
        $this->values[self::TOTALWITHVATEXCLUDED] = null;
        $this->values[self::TOTALVAT] = null;
        $this->values[self::TOTAL] = null;
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
     * @param \Diadoc\Api\Proto\Invoicing\TovTorgItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\TovTorgItem $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\TovTorgItem[]
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
     * @return \Diadoc\Api\Proto\Invoicing\TovTorgItem
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
     * Sets value of 'TotalQuantity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalQuantity($value)
    {
        return $this->set(self::TOTALQUANTITY, $value);
    }

    /**
     * Returns value of 'TotalQuantity' property
     *
     * @return string
     */
    public function getTotalQuantity()
    {
        $value = $this->get(self::TOTALQUANTITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TotalGross' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalGross($value)
    {
        return $this->set(self::TOTALGROSS, $value);
    }

    /**
     * Returns value of 'TotalGross' property
     *
     * @return string
     */
    public function getTotalGross()
    {
        $value = $this->get(self::TOTALGROSS);
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
     * Sets value of 'TotalVat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalVat($value)
    {
        return $this->set(self::TOTALVAT, $value);
    }

    /**
     * Returns value of 'TotalVat' property
     *
     * @return string
     */
    public function getTotalVat()
    {
        $value = $this->get(self::TOTALVAT);
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
}
}