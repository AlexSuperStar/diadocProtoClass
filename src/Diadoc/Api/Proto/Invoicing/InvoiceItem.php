<?php
/**
 * Auto generated from InvoiceInfo.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceItem message
 */
class InvoiceItem extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCT = 1;
    const UNIT = 2;
    const QUANTITY = 3;
    const PRICE = 4;
    const COUNTRIESOFORIGIN = 5;
    const CUSTOMSDECLARATIONNUMBERS = 6;
    const EXCISE = 7;
    const TAXRATE = 8;
    const SUBTOTALWITHVATEXCLUDED = 9;
    const VAT = 10;
    const SUBTOTAL = 11;
    const ADDITIONALINFO = 12;
    const CUSTOMSDECLARATIONS = 13;
    const ADDITIONALINFOS = 14;

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
        self::COUNTRIESOFORIGIN => array(
            'name' => 'CountriesOfOrigin',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMSDECLARATIONNUMBERS => array(
            'name' => 'CustomsDeclarationNumbers',
            'repeated' => true,
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
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMSDECLARATIONS => array(
            'name' => 'CustomsDeclarations',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\CustomsDeclaration'
        ),
        self::ADDITIONALINFOS => array(
            'name' => 'AdditionalInfos',
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
        $this->values[self::QUANTITY] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::COUNTRIESOFORIGIN] = array();
        $this->values[self::CUSTOMSDECLARATIONNUMBERS] = array();
        $this->values[self::EXCISE] = null;
        $this->values[self::TAXRATE] = null;
        $this->values[self::SUBTOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::SUBTOTAL] = null;
        $this->values[self::ADDITIONALINFO] = null;
        $this->values[self::CUSTOMSDECLARATIONS] = array();
        $this->values[self::ADDITIONALINFOS] = array();
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
     * Appends value to 'CountriesOfOrigin' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCountriesOfOrigin($value)
    {
        return $this->append(self::COUNTRIESOFORIGIN, $value);
    }

    /**
     * Clears 'CountriesOfOrigin' list
     *
     * @return null
     */
    public function clearCountriesOfOrigin()
    {
        return $this->clear(self::COUNTRIESOFORIGIN);
    }

    /**
     * Returns 'CountriesOfOrigin' list
     *
     * @return string[]
     */
    public function getCountriesOfOrigin()
    {
        return $this->get(self::COUNTRIESOFORIGIN);
    }

    /**
     * Returns 'CountriesOfOrigin' iterator
     *
     * @return \ArrayIterator
     */
    public function getCountriesOfOriginIterator()
    {
        return new \ArrayIterator($this->get(self::COUNTRIESOFORIGIN));
    }

    /**
     * Returns element from 'CountriesOfOrigin' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getCountriesOfOriginAt($offset)
    {
        return $this->get(self::COUNTRIESOFORIGIN, $offset);
    }

    /**
     * Returns count of 'CountriesOfOrigin' list
     *
     * @return int
     */
    public function getCountriesOfOriginCount()
    {
        return $this->count(self::COUNTRIESOFORIGIN);
    }

    /**
     * Appends value to 'CustomsDeclarationNumbers' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCustomsDeclarationNumbers($value)
    {
        return $this->append(self::CUSTOMSDECLARATIONNUMBERS, $value);
    }

    /**
     * Clears 'CustomsDeclarationNumbers' list
     *
     * @return null
     */
    public function clearCustomsDeclarationNumbers()
    {
        return $this->clear(self::CUSTOMSDECLARATIONNUMBERS);
    }

    /**
     * Returns 'CustomsDeclarationNumbers' list
     *
     * @return string[]
     */
    public function getCustomsDeclarationNumbers()
    {
        return $this->get(self::CUSTOMSDECLARATIONNUMBERS);
    }

    /**
     * Returns 'CustomsDeclarationNumbers' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomsDeclarationNumbersIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMSDECLARATIONNUMBERS));
    }

    /**
     * Returns element from 'CustomsDeclarationNumbers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getCustomsDeclarationNumbersAt($offset)
    {
        return $this->get(self::CUSTOMSDECLARATIONNUMBERS, $offset);
    }

    /**
     * Returns count of 'CustomsDeclarationNumbers' list
     *
     * @return int
     */
    public function getCustomsDeclarationNumbersCount()
    {
        return $this->count(self::CUSTOMSDECLARATIONNUMBERS);
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
     * Sets value of 'AdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdditionalInfo($value)
    {
        return $this->set(self::ADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'AdditionalInfo' property
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        $value = $this->get(self::ADDITIONALINFO);
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
     * Appends value to 'AdditionalInfos' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfo $value Value to append
     *
     * @return null
     */
    public function appendAdditionalInfos(\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        return $this->append(self::ADDITIONALINFOS, $value);
    }

    /**
     * Clears 'AdditionalInfos' list
     *
     * @return null
     */
    public function clearAdditionalInfos()
    {
        return $this->clear(self::ADDITIONALINFOS);
    }

    /**
     * Returns 'AdditionalInfos' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo[]
     */
    public function getAdditionalInfos()
    {
        return $this->get(self::ADDITIONALINFOS);
    }

    /**
     * Returns 'AdditionalInfos' iterator
     *
     * @return \ArrayIterator
     */
    public function getAdditionalInfosIterator()
    {
        return new \ArrayIterator($this->get(self::ADDITIONALINFOS));
    }

    /**
     * Returns element from 'AdditionalInfos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo
     */
    public function getAdditionalInfosAt($offset)
    {
        return $this->get(self::ADDITIONALINFOS, $offset);
    }

    /**
     * Returns count of 'AdditionalInfos' list
     *
     * @return int
     */
    public function getAdditionalInfosCount()
    {
        return $this->count(self::ADDITIONALINFOS);
    }
}
}