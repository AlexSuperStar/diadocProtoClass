<?php
/**
 * Auto generated from InvoiceInfo.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * CorrectableInvoiceItemFields message
 */
class CorrectableInvoiceItemFields extends \ProtobufMessage
{
    /* Field index constants */
    const UNIT = 1;
    const QUANTITY = 2;
    const PRICE = 3;
    const EXCISE = 4;
    const TAXRATE = 5;
    const SUBTOTALWITHVATEXCLUDED = 6;
    const VAT = 7;
    const SUBTOTAL = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UNIT => array(
            'name' => 'Unit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANTITY => array(
            'name' => 'Quantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICE => array(
            'name' => 'Price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXCISE => array(
            'name' => 'Excise',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TAXRATE => array(
            'name' => 'TaxRate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUBTOTALWITHVATEXCLUDED => array(
            'name' => 'SubtotalWithVatExcluded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBTOTAL => array(
            'name' => 'Subtotal',
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
        $this->values[self::UNIT] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::EXCISE] = null;
        $this->values[self::TAXRATE] = null;
        $this->values[self::SUBTOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::SUBTOTAL] = null;
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
     * Sets value of 'Unit' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnit($value)
    {
        return $this->set(self::UNIT, $value);
    }

    /**
     * Returns value of 'Unit' property
     *
     * @return string
     */
    public function getUnit()
    {
        $value = $this->get(self::UNIT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Quantity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuantity($value)
    {
        return $this->set(self::QUANTITY, $value);
    }

    /**
     * Returns value of 'Quantity' property
     *
     * @return string
     */
    public function getQuantity()
    {
        $value = $this->get(self::QUANTITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrice($value)
    {
        return $this->set(self::PRICE, $value);
    }

    /**
     * Returns value of 'Price' property
     *
     * @return string
     */
    public function getPrice()
    {
        $value = $this->get(self::PRICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Excise' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExcise($value)
    {
        return $this->set(self::EXCISE, $value);
    }

    /**
     * Returns value of 'Excise' property
     *
     * @return string
     */
    public function getExcise()
    {
        $value = $this->get(self::EXCISE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TaxRate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTaxRate($value)
    {
        return $this->set(self::TAXRATE, $value);
    }

    /**
     * Returns value of 'TaxRate' property
     *
     * @return integer
     */
    public function getTaxRate()
    {
        $value = $this->get(self::TAXRATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SubtotalWithVatExcluded' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubtotalWithVatExcluded($value)
    {
        return $this->set(self::SUBTOTALWITHVATEXCLUDED, $value);
    }

    /**
     * Returns value of 'SubtotalWithVatExcluded' property
     *
     * @return string
     */
    public function getSubtotalWithVatExcluded()
    {
        $value = $this->get(self::SUBTOTALWITHVATEXCLUDED);
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
     * Sets value of 'Subtotal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubtotal($value)
    {
        return $this->set(self::SUBTOTAL, $value);
    }

    /**
     * Returns value of 'Subtotal' property
     *
     * @return string
     */
    public function getSubtotal()
    {
        $value = $this->get(self::SUBTOTAL);
        return $value === null ? (string)$value : $value;
    }
}
}