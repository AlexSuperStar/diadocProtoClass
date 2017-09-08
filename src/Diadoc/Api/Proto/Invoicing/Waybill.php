<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Waybill message
 */
class Waybill extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSFERDOCUMENTNUMBER = 1;
    const TRANSFERDOCUMENTDATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSFERDOCUMENTNUMBER => array(
            'name' => 'TransferDocumentNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERDOCUMENTDATE => array(
            'name' => 'TransferDocumentDate',
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
        $this->values[self::TRANSFERDOCUMENTNUMBER] = null;
        $this->values[self::TRANSFERDOCUMENTDATE] = null;
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
     * Sets value of 'TransferDocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferDocumentNumber($value)
    {
        return $this->set(self::TRANSFERDOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'TransferDocumentNumber' property
     *
     * @return string
     */
    public function getTransferDocumentNumber()
    {
        $value = $this->get(self::TRANSFERDOCUMENTNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferDocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferDocumentDate($value)
    {
        return $this->set(self::TRANSFERDOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'TransferDocumentDate' property
     *
     * @return string
     */
    public function getTransferDocumentDate()
    {
        $value = $this->get(self::TRANSFERDOCUMENTDATE);
        return $value === null ? (string)$value : $value;
    }
}
}