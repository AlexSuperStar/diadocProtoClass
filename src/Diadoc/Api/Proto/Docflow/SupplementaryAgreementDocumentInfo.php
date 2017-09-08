<?php
/**
* Auto generated from DocumentInfo.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * SupplementaryAgreementDocumentInfo message
 */
class SupplementaryAgreementDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTAL = 1;
    const CONTRACTTYPE = 2;
    const CONTRACTNUMBER = 3;
    const CONTRACTDATE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'Total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTTYPE => array(
            'name' => 'ContractType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTNUMBER => array(
            'name' => 'ContractNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDATE => array(
            'name' => 'ContractDate',
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
        $this->values[self::TOTAL] = null;
        $this->values[self::CONTRACTTYPE] = null;
        $this->values[self::CONTRACTNUMBER] = null;
        $this->values[self::CONTRACTDATE] = null;
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

    /**
     * Sets value of 'ContractNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractNumber($value)
    {
        return $this->set(self::CONTRACTNUMBER, $value);
    }

    /**
     * Returns value of 'ContractNumber' property
     *
     * @return string
     */
    public function getContractNumber()
    {
        $value = $this->get(self::CONTRACTNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDate($value)
    {
        return $this->set(self::CONTRACTDATE, $value);
    }

    /**
     * Returns value of 'ContractDate' property
     *
     * @return string
     */
    public function getContractDate()
    {
        $value = $this->get(self::CONTRACTDATE);
        return $value === null ? (string)$value : $value;
    }
}
}