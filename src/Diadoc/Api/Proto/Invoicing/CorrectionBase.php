<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * CorrectionBase message
 */
class CorrectionBase extends \ProtobufMessage
{
    /* Field index constants */
    const BASEDOCUMENTNAME = 1;
    const BASEDOCUMENTNUMBER = 2;
    const BASEDOCUMENTDATE = 3;
    const ADDITIONALINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEDOCUMENTNAME => array(
            'name' => 'BaseDocumentName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BASEDOCUMENTNUMBER => array(
            'name' => 'BaseDocumentNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BASEDOCUMENTDATE => array(
            'name' => 'BaseDocumentDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
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
        $this->values[self::BASEDOCUMENTNAME] = null;
        $this->values[self::BASEDOCUMENTNUMBER] = null;
        $this->values[self::BASEDOCUMENTDATE] = null;
        $this->values[self::ADDITIONALINFO] = null;
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
     * Sets value of 'BaseDocumentName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBaseDocumentName($value)
    {
        return $this->set(self::BASEDOCUMENTNAME, $value);
    }

    /**
     * Returns value of 'BaseDocumentName' property
     *
     * @return string
     */
    public function getBaseDocumentName()
    {
        $value = $this->get(self::BASEDOCUMENTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'BaseDocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBaseDocumentNumber($value)
    {
        return $this->set(self::BASEDOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'BaseDocumentNumber' property
     *
     * @return string
     */
    public function getBaseDocumentNumber()
    {
        $value = $this->get(self::BASEDOCUMENTNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'BaseDocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBaseDocumentDate($value)
    {
        return $this->set(self::BASEDOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'BaseDocumentDate' property
     *
     * @return string
     */
    public function getBaseDocumentDate()
    {
        $value = $this->get(self::BASEDOCUMENTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'AdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdditionalInfo($value)
    {
        return $this->set(self::ADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'AdditionalInfo' property
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        $value = $this->get(self::ADDITIONALINFO);
        return $value === null ? (string)$value : $value;
    }
}
}