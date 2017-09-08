<?php
/**
* Auto generated from Torg12Info.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Torg12Item message
 */
class Torg12Item extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const FEATURE = 2;
    const SORT = 3;
    const NOMENCLATUREARTICLE = 4;
    const CODE = 5;
    const UNITCODE = 6;
    const UNITNAME = 7;
    const PARCELTYPE = 8;
    const PARCELCAPACITY = 9;
    const PARCELSQUANTITY = 10;
    const GROSSQUANTITY = 11;
    const QUANTITY = 12;
    const PRICE = 13;
    const TAXRATE = 14;
    const SUBTOTALWITHVATEXCLUDED = 15;
    const VAT = 16;
    const SUBTOTAL = 17;
    const ADDITIONALINFO = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'Name',
            'required' => true,
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
        self::NOMENCLATUREARTICLE => array(
            'name' => 'NomenclatureArticle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CODE => array(
            'name' => 'Code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNITCODE => array(
            'name' => 'UnitCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNITNAME => array(
            'name' => 'UnitName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARCELTYPE => array(
            'name' => 'ParcelType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARCELCAPACITY => array(
            'name' => 'ParcelCapacity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARCELSQUANTITY => array(
            'name' => 'ParcelsQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROSSQUANTITY => array(
            'name' => 'GrossQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANTITY => array(
            'name' => 'Quantity',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICE => array(
            'name' => 'Price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TAXRATE => array(
            'name' => 'TaxRate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NAME] = null;
        $this->values[self::FEATURE] = null;
        $this->values[self::SORT] = null;
        $this->values[self::NOMENCLATUREARTICLE] = null;
        $this->values[self::CODE] = null;
        $this->values[self::UNITCODE] = null;
        $this->values[self::UNITNAME] = null;
        $this->values[self::PARCELTYPE] = null;
        $this->values[self::PARCELCAPACITY] = null;
        $this->values[self::PARCELSQUANTITY] = null;
        $this->values[self::GROSSQUANTITY] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::TAXRATE] = null;
        $this->values[self::SUBTOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::SUBTOTAL] = null;
        $this->values[self::ADDITIONALINFO] = null;
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
     * Sets value of 'Name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'Name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
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
     * Sets value of 'NomenclatureArticle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNomenclatureArticle($value)
    {
        return $this->set(self::NOMENCLATUREARTICLE, $value);
    }

    /**
     * Returns value of 'NomenclatureArticle' property
     *
     * @return string
     */
    public function getNomenclatureArticle()
    {
        $value = $this->get(self::NOMENCLATUREARTICLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'Code' property
     *
     * @return string
     */
    public function getCode()
    {
        $value = $this->get(self::CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'UnitCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnitCode($value)
    {
        return $this->set(self::UNITCODE, $value);
    }

    /**
     * Returns value of 'UnitCode' property
     *
     * @return string
     */
    public function getUnitCode()
    {
        $value = $this->get(self::UNITCODE);
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
     * Sets value of 'ParcelType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParcelType($value)
    {
        return $this->set(self::PARCELTYPE, $value);
    }

    /**
     * Returns value of 'ParcelType' property
     *
     * @return string
     */
    public function getParcelType()
    {
        $value = $this->get(self::PARCELTYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ParcelCapacity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParcelCapacity($value)
    {
        return $this->set(self::PARCELCAPACITY, $value);
    }

    /**
     * Returns value of 'ParcelCapacity' property
     *
     * @return string
     */
    public function getParcelCapacity()
    {
        $value = $this->get(self::PARCELCAPACITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ParcelsQuantity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParcelsQuantity($value)
    {
        return $this->set(self::PARCELSQUANTITY, $value);
    }

    /**
     * Returns value of 'ParcelsQuantity' property
     *
     * @return string
     */
    public function getParcelsQuantity()
    {
        $value = $this->get(self::PARCELSQUANTITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'GrossQuantity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrossQuantity($value)
    {
        return $this->set(self::GROSSQUANTITY, $value);
    }

    /**
     * Returns value of 'GrossQuantity' property
     *
     * @return string
     */
    public function getGrossQuantity()
    {
        $value = $this->get(self::GROSSQUANTITY);
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
     * Sets value of 'TaxRate' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getTaxRate()
    {
        $value = $this->get(self::TAXRATE);
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
}
}