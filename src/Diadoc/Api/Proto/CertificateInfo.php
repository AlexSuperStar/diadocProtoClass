<?php
/**
* Auto generated from CertificateInfo.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CertificateInfo message
 */
class CertificateInfo extends \ProtobufMessage
{
    /* Field index constants */
    const THUMBPRINT = 1;
    const VALIDFROM = 2;
    const VALIDTO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::THUMBPRINT => array(
            'name' => 'Thumbprint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALIDFROM => array(
            'name' => 'ValidFrom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::VALIDTO => array(
            'name' => 'ValidTo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
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
        $this->values[self::THUMBPRINT] = null;
        $this->values[self::VALIDFROM] = null;
        $this->values[self::VALIDTO] = null;
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
     * Sets value of 'Thumbprint' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThumbprint($value)
    {
        return $this->set(self::THUMBPRINT, $value);
    }

    /**
     * Returns value of 'Thumbprint' property
     *
     * @return string
     */
    public function getThumbprint()
    {
        $value = $this->get(self::THUMBPRINT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ValidFrom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValidFrom($value)
    {
        return $this->set(self::VALIDFROM, $value);
    }

    /**
     * Returns value of 'ValidFrom' property
     *
     * @return integer
     */
    public function getValidFrom()
    {
        $value = $this->get(self::VALIDFROM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'ValidTo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValidTo($value)
    {
        return $this->set(self::VALIDTO, $value);
    }

    /**
     * Returns value of 'ValidTo' property
     *
     * @return integer
     */
    public function getValidTo()
    {
        $value = $this->get(self::VALIDTO);
        return $value === null ? (integer)$value : $value;
    }
}
}