<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * ExtendedInvoiceCorrectionItem message
 */
class ExtendedInvoiceCorrectionItem extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCT = 1;
    const ORIGINALVALUES = 2;
    const CORRECTEDVALUES = 3;
    const AMOUNTSINC = 4;
    const AMOUNTSDEC = 5;
    const ITEMACCOUNTDEBIT = 6;
    const ITEMACCOUNTCREDIT = 7;
    const ADDITIONALINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRODUCT => array(
            'name' => 'Product',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINALVALUES => array(
            'name' => 'OriginalValues',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields'
        ),
        self::CORRECTEDVALUES => array(
            'name' => 'CorrectedValues',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields'
        ),
        self::AMOUNTSINC => array(
            'name' => 'AmountsInc',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff'
        ),
        self::AMOUNTSDEC => array(
            'name' => 'AmountsDec',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff'
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
        $this->values[self::ORIGINALVALUES] = null;
        $this->values[self::CORRECTEDVALUES] = null;
        $this->values[self::AMOUNTSINC] = null;
        $this->values[self::AMOUNTSDEC] = null;
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
     * Sets value of 'OriginalValues' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value Property value
     *
     * @return null
     */
    public function setOriginalValues(\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value=null)
    {
        return $this->set(self::ORIGINALVALUES, $value);
    }

    /**
     * Returns value of 'OriginalValues' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    public function getOriginalValues()
    {
        return $this->get(self::ORIGINALVALUES);
    }

    /**
     * Sets value of 'CorrectedValues' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value Property value
     *
     * @return null
     */
    public function setCorrectedValues(\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value=null)
    {
        return $this->set(self::CORRECTEDVALUES, $value);
    }

    /**
     * Returns value of 'CorrectedValues' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    public function getCorrectedValues()
    {
        return $this->get(self::CORRECTEDVALUES);
    }

    /**
     * Sets value of 'AmountsInc' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value Property value
     *
     * @return null
     */
    public function setAmountsInc(\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value=null)
    {
        return $this->set(self::AMOUNTSINC, $value);
    }

    /**
     * Returns value of 'AmountsInc' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    public function getAmountsInc()
    {
        return $this->get(self::AMOUNTSINC);
    }

    /**
     * Sets value of 'AmountsDec' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value Property value
     *
     * @return null
     */
    public function setAmountsDec(\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value=null)
    {
        return $this->set(self::AMOUNTSDEC, $value);
    }

    /**
     * Returns value of 'AmountsDec' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    public function getAmountsDec()
    {
        return $this->get(self::AMOUNTSDEC);
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