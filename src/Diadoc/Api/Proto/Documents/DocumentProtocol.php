<?php
/**
 * Auto generated from DocumentProtocol.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * DocumentProtocol message
 */
class DocumentProtocol extends \ProtobufMessage
{
    /* Field index constants */
    const PRINTFORM = 1;
    const SIGNATURE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRINTFORM => array(
            'name' => 'PrintForm',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
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
        $this->values[self::PRINTFORM] = null;
        $this->values[self::SIGNATURE] = null;
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
     * Sets value of 'PrintForm' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrintForm($value)
    {
        return $this->set(self::PRINTFORM, $value);
    }

    /**
     * Returns value of 'PrintForm' property
     *
     * @return string
     */
    public function getPrintForm()
    {
        $value = $this->get(self::PRINTFORM);
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
}
}