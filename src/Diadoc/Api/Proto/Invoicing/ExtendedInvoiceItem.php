<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * ExtendedInvoiceItem message
 */
class ExtendedInvoiceItem extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCT = 1;
    const UNIT = 2;
    const UNITNAME = 3;
    const QUANTITY = 4;
    const PRICE = 5;
    const EXCISE = 6;
    const TAXRATE = 7;
    const SUBTOTALWITHVATEXCLUDED = 8;
    const VAT = 9;
    const SUBTOTAL = 10;
    const CUSTOMSDECLARATIONS = 11;
    const ITEMMARK = 12;
    const ADDITIONALPROPERTY = 13;
    const ITEMVENDORCODE = 14;
    const ITEMTORELEASE = 15;
    const ITEMACCOUNTDEBIT = 16;
    const ITEMACCOUNTCREDIT = 17;
    const ADDITIONALINFO = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRODUCT => array(
            'name' => 'Product',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNIT => array(
            'name' => 'Unit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNITNAME => array(
            'name' => 'UnitName',
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
        self::CUSTOMSDECLARATIONS => array(
            'name' => 'CustomsDeclarations',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\CustomsDeclaration'
        ),
        self::ITEMMARK => array(
            'name' => 'ItemMark',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADDITIONALPROPERTY => array(
            'name' => 'AdditionalProperty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMVENDORCODE => array(
            'name' => 'ItemVendorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMTORELEASE => array(
            'name' => 'ItemToRelease',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMACCOUNTDEBIT => array(
            'name' => 'ItemAccountDebit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMACCOUNTCREDIT => array(
            'name' => 'ItemAccountCredit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfo'
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
        $this->values[self::PRODUCT] = null;
        $this->values[self::UNIT] = null;
        $this->values[self::UNITNAME] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::EXCISE] = null;
        $this->values[self::TAXRATE] = null;
        $this->values[self::SUBTOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::SUBTOTAL] = null;
        $this->values[self::CUSTOMSDECLARATIONS] = array();
        $this->values[self::ITEMMARK] = null;
        $this->values[self::ADDITIONALPROPERTY] = null;
        $this->values[self::ITEMVENDORCODE] = null;
        $this->values[self::ITEMTORELEASE] = null;
        $this->values[self::ITEMACCOUNTDEBIT] = null;
        $this->values[self::ITEMACCOUNTCREDIT] = null;
        $this->values[self::ADDITIONALINFO] = array();
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
     * Sets value of 'Product' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProduct($value)
    {
        return $this->set(self::PRODUCT, $value);
    }

    /**
     * Returns value of 'Product' property
     *
     * @return string
     */
    public function getProduct()
    {
        $value = $this->get(self::PRODUCT);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'UnitName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnitName($value)
    {
        return $this->set(self::UNITNAME, $value);
    }

    /**
     * Returns value of 'UnitName' property
     *
     * @return string
     */
    public function getUnitName()
    {
        $value = $this->get(self::UNITNAME);
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

    /**
     * Appends value to 'CustomsDeclarations' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\CustomsDeclaration $value Value to append
     *
     * @return null
     */
    public function appendCustomsDeclarations(\Diadoc\Api\Proto\Invoicing\CustomsDeclaration $value)
    {
        return $this->append(self::CUSTOMSDECLARATIONS, $value);
    }

    /**
     * Clears 'CustomsDeclarations' list
     *
     * @return null
     */
    public function clearCustomsDeclarations()
    {
        return $this->clear(self::CUSTOMSDECLARATIONS);
    }

    /**
     * Returns 'CustomsDeclarations' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\CustomsDeclaration[]
     */
    public function getCustomsDeclarations()
    {
        return $this->get(self::CUSTOMSDECLARATIONS);
    }

    /**
     * Returns 'CustomsDeclarations' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomsDeclarationsIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMSDECLARATIONS));
    }

    /**
     * Returns element from 'CustomsDeclarations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\CustomsDeclaration
     */
    public function getCustomsDeclarationsAt($offset)
    {
        return $this->get(self::CUSTOMSDECLARATIONS, $offset);
    }

    /**
     * Returns count of 'CustomsDeclarations' list
     *
     * @return int
     */
    public function getCustomsDeclarationsCount()
    {
        return $this->count(self::CUSTOMSDECLARATIONS);
    }

    /**
     * Sets value of 'ItemMark' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemMark($value)
    {
        return $this->set(self::ITEMMARK, $value);
    }

    /**
     * Returns value of 'ItemMark' property
     *
     * @return integer
     */
    public function getItemMark()
    {
        $value = $this->get(self::ITEMMARK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'AdditionalProperty' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdditionalProperty($value)
    {
        return $this->set(self::ADDITIONALPROPERTY, $value);
    }

    /**
     * Returns value of 'AdditionalProperty' property
     *
     * @return string
     */
    public function getAdditionalProperty()
    {
        $value = $this->get(self::ADDITIONALPROPERTY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ItemVendorCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setItemVendorCode($value)
    {
        return $this->set(self::ITEMVENDORCODE, $value);
    }

    /**
     * Returns value of 'ItemVendorCode' property
     *
     * @return string
     */
    public function getItemVendorCode()
    {
        $value = $this->get(self::ITEMVENDORCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ItemToRelease' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setItemToRelease($value)
    {
        return $this->set(self::ITEMTORELEASE, $value);
    }

    /**
     * Returns value of 'ItemToRelease' property
     *
     * @return string
     */
    public function getItemToRelease()
    {
        $value = $this->get(self::ITEMTORELEASE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ItemAccountDebit' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setItemAccountDebit($value)
    {
        return $this->set(self::ITEMACCOUNTDEBIT, $value);
    }

    /**
     * Returns value of 'ItemAccountDebit' property
     *
     * @return string
     */
    public function getItemAccountDebit()
    {
        $value = $this->get(self::ITEMACCOUNTDEBIT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ItemAccountCredit' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setItemAccountCredit($value)
    {
        return $this->set(self::ITEMACCOUNTCREDIT, $value);
    }

    /**
     * Returns value of 'ItemAccountCredit' property
     *
     * @return string
     */
    public function getItemAccountCredit()
    {
        $value = $this->get(self::ITEMACCOUNTCREDIT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'AdditionalInfo' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfo $value Value to append
     *
     * @return null
     */
    public function appendAdditionalInfo(\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        return $this->append(self::ADDITIONALINFO, $value);
    }

    /**
     * Clears 'AdditionalInfo' list
     *
     * @return null
     */
    public function clearAdditionalInfo()
    {
        return $this->clear(self::ADDITIONALINFO);
    }

    /**
     * Returns 'AdditionalInfo' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo[]
     */
    public function getAdditionalInfo()
    {
        return $this->get(self::ADDITIONALINFO);
    }

    /**
     * Returns 'AdditionalInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getAdditionalInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ADDITIONALINFO));
    }

    /**
     * Returns element from 'AdditionalInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo
     */
    public function getAdditionalInfoAt($offset)
    {
        return $this->get(self::ADDITIONALINFO, $offset);
    }

    /**
     * Returns count of 'AdditionalInfo' list
     *
     * @return int
     */
    public function getAdditionalInfoCount()
    {
        return $this->count(self::ADDITIONALINFO);
    }
}
}