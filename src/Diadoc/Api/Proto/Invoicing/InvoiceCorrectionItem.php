<?php
/**
 * Auto generated from InvoiceInfo.proto at 2016-10-06 18:08:58
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceCorrectionItem message
 */
class InvoiceCorrectionItem extends \ProtobufMessage
{
    /* Field index constants */
    const PRODUCT = 1;
    const ORIGINALVALUES = 2;
    const CORRECTEDVALUES = 3;
    const AMOUNTSINC = 4;
    const AMOUNTSDEC = 5;
    const ADDITIONALINFO = 6;
    const ADDITIONALINFOS = 7;

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
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
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
        $this->values[self::ORIGINALVALUES] = null;
        $this->values[self::CORRECTEDVALUES] = null;
        $this->values[self::AMOUNTSINC] = null;
        $this->values[self::AMOUNTSDEC] = null;
        $this->values[self::ADDITIONALINFO] = null;
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