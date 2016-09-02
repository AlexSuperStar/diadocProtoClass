<?php
/**
 * Auto generated from UnilateralDocument.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents.UnilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\UnilateralDocument {
/**
 * ServiceDetailsMetadata message
 */
class ServiceDetailsMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const RECEIPTSTATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus,
            'name' => 'DocumentStatus',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECEIPTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus,
            'name' => 'ReceiptStatus',
            'required' => true,
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