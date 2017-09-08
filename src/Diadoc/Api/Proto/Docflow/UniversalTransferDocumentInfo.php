<?php
/**
* Auto generated from DocumentInfo.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * UniversalTransferDocumentInfo message
 */
class UniversalTransferDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTAL = 1;
    const VAT = 2;
    const CURRENCYCODE = 3;
    const GROUNDS = 4;
    const FUNCTION = 5;
    const ORIGINALDOCUMENTDATEANDNUMBER = 6;

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
        self::GROUNDS => array(
            'name' => 'Grounds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FUNCTION => array(
            'name' => 'Function',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ORIGINALDOCUMENTDATEANDNUMBER => array(
            'name' => 'OriginalDocumentDateAndNumber',
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
        $this->values[self::GROUNDS] = null;
        $this->values[self::FUNCTION] = null;
        $this->values[self::ORIGINALDOCUMENTDATEANDNUMBER] = null;
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
     * Sets value of 'Grounds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrounds($value)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return string
     */
    public function getGrounds()
    {
        $value = $this->get(self::GROUNDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Function' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFunction($value)
    {
        return $this->set(self::FUNCTION, $value);
    }

    /**
     * Returns value of 'Function' property
     *
     * @return integer
     */
    public function getFunction()
    {
        $value = $this->get(self::FUNCTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'OriginalDocumentDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalDocumentDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALDOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalDocumentDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentDateAndNumber()
    {
        return $this->get(self::ORIGINALDOCUMENTDATEANDNUMBER);
    }
}
}