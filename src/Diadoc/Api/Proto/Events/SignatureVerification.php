<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * SignatureVerification message
 */
class SignatureVerification extends \ProtobufMessage
{
    /* Field index constants */
    const INITIALDOCUMENTID = 1;
    const ISVALID = 2;
    const ERRORMESSAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INITIALDOCUMENTID => array(
            'name' => 'InitialDocumentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ERRORMESSAGE => array(
            'name' => 'ErrorMessage',
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
        $this->values[self::INITIALDOCUMENTID] = null;
        $this->values[self::ISVALID] = null;
        $this->values[self::ERRORMESSAGE] = null;
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
     * Sets value of 'InitialDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialDocumentId($value)
    {
        return $this->set(self::INITIALDOCUMENTID, $value);
    }

    /**
     * Returns value of 'InitialDocumentId' property
     *
     * @return string
     */
    public function getInitialDocumentId()
    {
        $value = $this->get(self::INITIALDOCUMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IsValid' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsValid($value)
    {
        return $this->set(self::ISVALID, $value);
    }

    /**
     * Returns value of 'IsValid' property
     *
     * @return boolean
     */
    public function getIsValid()
    {
        $value = $this->get(self::ISVALID);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'ErrorMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMessage($value)
    {
        return $this->set(self::ERRORMESSAGE, $value);
    }

    /**
     * Returns value of 'ErrorMessage' property
     *
     * @return string
     */
    public function getErrorMessage()
    {
        $value = $this->get(self::ERRORMESSAGE);
        return $value === null ? (string)$value : $value;
    }
}
}