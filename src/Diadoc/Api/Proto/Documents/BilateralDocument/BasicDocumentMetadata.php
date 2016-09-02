<?php
/**
 * Auto generated from BilateralDocument.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents.BilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\BilateralDocument {
/**
 * BasicDocumentMetadata message
 */
class BasicDocumentMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTAL = 2;
    const VAT = 3;
    const GROUNDS = 4;
    const RECEIPTSTATUS = 5;

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
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
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
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
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