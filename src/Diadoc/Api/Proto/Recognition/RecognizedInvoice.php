<?php
/**
* Auto generated from Recognition.proto
*
 * Diadoc.Api.Proto.Recognition package
 */

namespace Diadoc\Api\Proto\Recognition {
/**
 * RecognizedInvoice message
 */
class RecognizedInvoice extends \ProtobufMessage
{
    /* Field index constants */
    const METADATAJSON = 1;
    const VALIDATIONERRORMESSAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::METADATAJSON => array(
            'name' => 'MetadataJson',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALIDATIONERRORMESSAGE => array(
            'name' => 'ValidationErrorMessage',
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
        $this->values[self::METADATAJSON] = null;
        $this->values[self::VALIDATIONERRORMESSAGE] = null;
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
     * Sets value of 'MetadataJson' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMetadataJson($value)
    {
        return $this->set(self::METADATAJSON, $value);
    }

    /**
     * Returns value of 'MetadataJson' property
     *
     * @return string
     */
    public function getMetadataJson()
    {
        $value = $this->get(self::METADATAJSON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ValidationErrorMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValidationErrorMessage($value)
    {
        return $this->set(self::VALIDATIONERRORMESSAGE, $value);
    }

    /**
     * Returns value of 'ValidationErrorMessage' property
     *
     * @return string
     */
    public function getValidationErrorMessage()
    {
        $value = $this->get(self::VALIDATIONERRORMESSAGE);
        return $value === null ? (string)$value : $value;
    }
}
}