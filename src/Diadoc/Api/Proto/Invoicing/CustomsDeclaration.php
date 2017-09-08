<?php
/**
* Auto generated from InvoiceInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * CustomsDeclaration message
 */
class CustomsDeclaration extends \ProtobufMessage
{
    /* Field index constants */
    const COUNTRYCODE = 1;
    const DECLARATIONNUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COUNTRYCODE => array(
            'name' => 'CountryCode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DECLARATIONNUMBER => array(
            'name' => 'DeclarationNumber',
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
        $this->values[self::COUNTRYCODE] = null;
        $this->values[self::DECLARATIONNUMBER] = null;
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
     * Sets value of 'CountryCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountryCode($value)
    {
        return $this->set(self::COUNTRYCODE, $value);
    }

    /**
     * Returns value of 'CountryCode' property
     *
     * @return string
     */
    public function getCountryCode()
    {
        $value = $this->get(self::COUNTRYCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DeclarationNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeclarationNumber($value)
    {
        return $this->set(self::DECLARATIONNUMBER, $value);
    }

    /**
     * Returns value of 'DeclarationNumber' property
     *
     * @return string
     */
    public function getDeclarationNumber()
    {
        $value = $this->get(self::DECLARATIONNUMBER);
        return $value === null ? (string)$value : $value;
    }
}
}