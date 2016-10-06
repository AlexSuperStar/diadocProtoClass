<?php
/**
 * Auto generated from BilateralDocument.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents.BilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\BilateralDocument {
/**
 * PriceListMetadata message
 */
class PriceListMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const PRICELISTEFFECTIVEDATE = 2;
    const CONTRACTDOCUMENTDATE = 3;
    const CONTRACTDOCUMENTNUMBER = 4;
    const RECEIPTSTATUS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus,
            'name' => 'DocumentStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRICELISTEFFECTIVEDATE => array(
            'name' => 'PriceListEffectiveDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDOCUMENTDATE => array(
            'name' => 'ContractDocumentDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDOCUMENTNUMBER => array(
            'name' => 'ContractDocumentNumber',
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
        $this->values[self::PRICELISTEFFECTIVEDATE] = null;
        $this->values[self::CONTRACTDOCUMENTDATE] = null;
        $this->values[self::CONTRACTDOCUMENTNUMBER] = null;
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
     * Sets value of 'PriceListEffectiveDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPriceListEffectiveDate($value)
    {
        return $this->set(self::PRICELISTEFFECTIVEDATE, $value);
    }

    /**
     * Returns value of 'PriceListEffectiveDate' property
     *
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        $value = $this->get(self::PRICELISTEFFECTIVEDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractDocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDocumentDate($value)
    {
        return $this->set(self::CONTRACTDOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'ContractDocumentDate' property
     *
     * @return string
     */
    public function getContractDocumentDate()
    {
        $value = $this->get(self::CONTRACTDOCUMENTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractDocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDocumentNumber($value)
    {
        return $this->set(self::CONTRACTDOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'ContractDocumentNumber' property
     *
     * @return string
     */
    public function getContractDocumentNumber()
    {
        $value = $this->get(self::CONTRACTDOCUMENTNUMBER);
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