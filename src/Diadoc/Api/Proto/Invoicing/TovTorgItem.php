<?php
/**
* Auto generated from TovTorgInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * TovTorgItem message
 */
class TovTorgItem extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCT = 1;
    const FEATURE = 2;
    const SORT = 3;
    const VENDORCODE = 4;
    const PRODUCTCODE = 5;
    const UNITNAME = 6;
    const UNIT = 7;
    const PACKAGETYPE = 8;
    const QUANTITYINPACK = 9;
    const QUANTITY = 10;
    const GROSS = 11;
    const NET = 12;
    const ITEMTORELEASE = 13;
    const PRICE = 14;
    const SUBTOTALWITHVATEXCLUDED = 15;
    const TAXRATE = 16;
    const VAT = 17;
    const SUBTOTAL = 18;
    const ITEMACCOUNTDEBIT = 19;
    const ITEMACCOUNTCREDIT = 20;
    const ADDITIONALINFOS = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRODUCT => array(
            'name' => 'Product',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FEATURE => array(
            'name' => 'Feature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SORT => array(
            'name' => 'Sort',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VENDORCODE => array(
            'name' => 'VendorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRODUCTCODE => array(
            'name' => 'ProductCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNITNAME => array(
            'name' => 'UnitName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNIT => array(
            'name' => 'Unit',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PACKAGETYPE => array(
            'name' => 'PackageType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANTITYINPACK => array(
            'name' => 'QuantityInPack',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANTITY => array(
            'name' => 'Quantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROSS => array(
            'name' => 'Gross',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NET => array(
            'name' => 'Net',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMTORELEASE => array(
            'name' => 'ItemToRelease',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICE => array(
            'name' => 'Price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBTOTALWITHVATEXCLUDED => array(
            'name' => 'SubtotalWithVatExcluded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TAXRATE => array(
            'default' => \Diadoc\Api\Proto\Invoicing\TaxRate::TaxRateNotSpecified,
            'name' => 'TaxRate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::FEATURE] = null;
        $this->values[self::SORT] = null;
        $this->values[self::VENDORCODE] = null;
        $this->values[self::PRODUCTCODE] = null;
        $this->values[self::UNITNAME] = null;
        $this->values[self::UNIT] = null;
        $this->values[self::PACKAGETYPE] = null;
        $this->values[self::QUANTITYINPACK] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::GROSS] = null;
        $this->values[self::NET] = null;
        $this->values[self::ITEMTORELEASE] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::SUBTOTALWITHVATEXCLUDED] = null;
        $this->values[self::TAXRATE] = self::$fields[self::TAXRATE]['default'];
        $this->values[self::VAT] = null;
        $this->values[self::SUBTOTAL] = null;
        $this->values[self::ITEMACCOUNTDEBIT] = null;
        $this->values[self::ITEMACCOUNTCREDIT] = null;
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
     * Sets value of 'Feature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFeature($value)
    {
        return $this->set(self::FEATURE, $value);
    }

    /**
     * Returns value of 'Feature' property
     *
     * @return string
     */
    public function getFeature()
    {
        $value = $this->get(self::FEATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Sort' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSort($value)
    {
        return $this->set(self::SORT, $value);
    }

    /**
     * Returns value of 'Sort' property
     *
     * @return string
     */
    public function getSort()
    {
        $value = $this->get(self::SORT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'VendorCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVendorCode($value)
    {
        return $this->set(self::VENDORCODE, $value);
    }

    /**
     * Returns value of 'VendorCode' property
     *
     * @return string
     */
    public function getVendorCode()
    {
        $value = $this->get(self::VENDORCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ProductCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProductCode($value)
    {
        return $this->set(self::PRODUCTCODE, $value);
    }

    /**
     * Returns value of 'ProductCode' property
     *
     * @return string
     */
    public function getProductCode()
    {
        $value = $this->get(self::PRODUCTCODE);
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
     * Sets value of 'PackageType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackageType($value)
    {
        return $this->set(self::PACKAGETYPE, $value);
    }

    /**
     * Returns value of 'PackageType' property
     *
     * @return string
     */
    public function getPackageType()
    {
        $value = $this->get(self::PACKAGETYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'QuantityInPack' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuantityInPack($value)
    {
        return $this->set(self::QUANTITYINPACK, $value);
    }

    /**
     * Returns value of 'QuantityInPack' property
     *
     * @return string
     */
    public function getQuantityInPack()
    {
        $value = $this->get(self::QUANTITYINPACK);
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
     * Sets value of 'Gross' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGross($value)
    {
        return $this->set(self::GROSS, $value);
    }

    /**
     * Returns value of 'Gross' property
     *
     * @return string
     */
    public function getGross()
    {
        $value = $this->get(self::GROSS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Net' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNet($value)
    {
        return $this->set(self::NET, $value);
    }

    /**
     * Returns value of 'Net' property
     *
     * @return string
     */
    public function getNet()
    {
        $value = $this->get(self::NET);
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