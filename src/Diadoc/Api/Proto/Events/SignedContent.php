<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * SignedContent message
 */
class SignedContent extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT = 1;
    const SIGNATURE = 2;
    const NAMEONSHELF = 4;
    const SIGNWITHTESTSIGNATURE = 5;
    const SIGNATURENAMEONSHELF = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAMEONSHELF => array(
            'name' => 'NameOnShelf',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNWITHTESTSIGNATURE => array(
            'default' => false,
            'name' => 'SignWithTestSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SIGNATURENAMEONSHELF => array(
            'name' => 'SignatureNameOnShelf',
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
        $this->values[self::CONTENT] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::NAMEONSHELF] = null;
        $this->values[self::SIGNWITHTESTSIGNATURE] = self::$fields[self::SIGNWITHTESTSIGNATURE]['default'];
        $this->values[self::SIGNATURENAMEONSHELF] = null;
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
     * Sets value of 'Content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'Signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NameOnShelf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNameOnShelf($value)
    {
        return $this->set(self::NAMEONSHELF, $value);
    }

    /**
     * Returns value of 'NameOnShelf' property
     *
     * @return string
     */
    public function getNameOnShelf()
    {
        $value = $this->get(self::NAMEONSHELF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignWithTestSignature' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSignWithTestSignature($value)
    {
        return $this->set(self::SIGNWITHTESTSIGNATURE, $value);
    }

    /**
     * Returns value of 'SignWithTestSignature' property
     *
     * @return boolean
     */
    public function getSignWithTestSignature()
    {
        $value = $this->get(self::SIGNWITHTESTSIGNATURE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'SignatureNameOnShelf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignatureNameOnShelf($value)
    {
        return $this->set(self::SIGNATURENAMEONSHELF, $value);
    }

    /**
     * Returns value of 'SignatureNameOnShelf' property
     *
     * @return string
     */
    public function getSignatureNameOnShelf()
    {
        $value = $this->get(self::SIGNATURENAMEONSHELF);
        return $value === null ? (string)$value : $value;
    }
}
}