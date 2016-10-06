<?php
/**
 * Auto generated from BilateralDocument.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents.BilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\BilateralDocument {
/**
 * SupplementaryAgreementMetadata message
 */
class SupplementaryAgreementMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTAL = 2;
    const CONTRACTTYPE = 3;
    const CONTRACTNUMBER = 4;
    const CONTRACTDATE = 5;
    const RECEIPTSTATUS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus,
            'name' => 'DocumentStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDATE => array(
            'name' => 'ContractDate',
            'required' => true,
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
        $this->values[self::TOTAL] = null;
        $this->values[self::CONTRACTTYPE] = null;
        $this->values[self::CONTRACTNUMBER] = null;
        $this->values[self::CONTRACTDATE] = null;
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