<?php
/**
 * Auto generated from BilateralDocument.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents.BilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\BilateralDocument {
/**
 * ContractMetadata message
 */
class ContractMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const CONTRACTPRICE = 2;
    const CONTRACTTYPE = 3;
    const RECEIPTSTATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus,
            'name' => 'DocumentStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::RECEIPTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus,
            'name' => 'ReceiptStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::DOCUMENTSTATUS] = self::$fields[self::DOCUMENTSTATUS]['default'];
        $this->values[self::CONTRACTPRICE] = null;
        $this->values[self::CONTRACTTYPE] = null;
        $this->values[self::RECEIPTSTATUS] = self::$fields[self::RECEIPTSTATUS]['default'];
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
     * Sets value of 'DocumentStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDocumentStatus($value)
    {
        return $this->set(self::DOCUMENTSTATUS, $value);
    }

    /**
     * Returns value of 'DocumentStatus' property
     *
     * @return integer
     */
    public function getDocumentStatus()
    {
        $value = $this->get(self::DOCUMENTSTATUS);
        return $value === null ? (integer)$value : $value;
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

    /**
     * Sets value of 'ReceiptStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceiptStatus($value)
    {
        return $this->set(self::RECEIPTSTATUS, $value);
    }

    /**
     * Returns value of 'ReceiptStatus' property
     *
     * @return integer
     */
    public function getReceiptStatus()
    {
        $value = $this->get(self::RECEIPTSTATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}