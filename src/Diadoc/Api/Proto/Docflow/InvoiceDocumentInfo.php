<?php
/**
 * Auto generated from DocumentInfo.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * InvoiceDocumentInfo message
 */
class InvoiceDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTAL = 1;
    const VAT = 2;
    const CURRENCYCODE = 3;
    const ORIGINALINVOICEDATEANDNUMBER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'Total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENCYCODE => array(
            'name' => 'CurrencyCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ORIGINALINVOICEDATEANDNUMBER => array(
            'name' => 'OriginalInvoiceDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
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
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::CURRENCYCODE] = null;
        $this->values[self::ORIGINALINVOICEDATEANDNUMBER] = null;
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
     * Sets value of 'CurrencyCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrencyCode($value)
    {
        return $this->set(self::CURRENCYCODE, $value);
    }

    /**
     * Returns value of 'CurrencyCode' property
     *
     * @return integer
     */
    public function getCurrencyCode()
    {
        $value = $this->get(self::CURRENCYCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'OriginalInvoiceDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALINVOICEDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceDateAndNumber()
    {
        return $this->get(self::ORIGINALINVOICEDATEANDNUMBER);
    }
}
}