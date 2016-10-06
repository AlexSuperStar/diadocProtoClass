<?php
/**
 * Auto generated from DocumentInfo.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * ContractDocumentInfo message
 */
class ContractDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CONTRACTPRICE = 1;
    const CONTRACTTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTRACTPRICE => array(
            'name' => 'ContractPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTTYPE => array(
            'name' => 'ContractType',
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
        $this->values[self::CONTRACTPRICE] = null;
        $this->values[self::CONTRACTTYPE] = null;
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
     * Sets value of 'ContractPrice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractPrice($value)
    {
        return $this->set(self::CONTRACTPRICE, $value);
    }

    /**
     * Returns value of 'ContractPrice' property
     *
     * @return string
     */
    public function getContractPrice()
    {
        $value = $this->get(self::CONTRACTPRICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractType($value)
    {
        return $this->set(self::CONTRACTTYPE, $value);
    }

    /**
     * Returns value of 'ContractType' property
     *
     * @return string
     */
    public function getContractType()
    {
        $value = $this->get(self::CONTRACTTYPE);
        return $value === null ? (string)$value : $value;
    }
}
}