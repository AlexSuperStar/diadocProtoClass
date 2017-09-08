<?php
/**
* Auto generated from AcceptanceCertificate552Info.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificate552WorkItem message
 */
class AcceptanceCertificate552WorkItem extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const DESCRIPTION = 2;
    const UNITCODE = 3;
    const UNITNAME = 4;
    const PRICE = 5;
    const QUANTITY = 6;
    const SUBTOTALWITHVATEXCLUDED = 7;
    const VAT = 8;
    const SUBTOTAL = 9;
    const ADDITIONALINFOS = 10;
    const TAXRATE = 11;
    const ITEMACCOUNTDEBIT = 12;
    const ITEMACCOUNTCREDIT = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'Name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DESCRIPTION => array(
            'name' => 'Description',
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
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICE => array(
            'name' => 'Price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANTITY => array(
            'name' => 'Quantity',
            'required' => false,
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
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFOS => array(
            'name' => 'AdditionalInfos',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfo'
        ),
        self::TAXRATE => array(
            'default' => \Diadoc\Api\Proto\Invoicing\TaxRate::TaxRateNotSpecified,
            'name' => 'TaxRate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::UNITCODE] = null;
        $this->values[self::UNITNAME] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::SUBTOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::SUBTOTAL] = null;
        $this->values[self::ADDITIONALINFOS] = array();
        $this->values[self::TAXRATE] = self::$fields[self::TAXRATE]['default'];
        $this->values[self::ITEMACCOUNTDEBIT] = null;
        $this->values[self::ITEMACCOUNTCREDIT] = null;
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
     * Sets value of 'Description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value)
    {
        return $this->set(self::DESCRIPTION, $value);
    }

    /**
     * Returns value of 'Description' property
     *
     * @return string
     */
    public function getDescription()
    {
        $value = $this->get(self::DESCRIPTION);
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
}
}