<?php
/**
* Auto generated from Counteragent.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Certificate message
 */
class Certificate extends \ProtobufMessage
{
    /* Field index constants */
    const RAWCERTIFICATEDATA = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RAWCERTIFICATEDATA => array(
            'name' => 'RawCertificateData',
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
        $this->values[self::RAWCERTIFICATEDATA] = null;
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
     * Sets value of 'RawCertificateData' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRawCertificateData($value)
    {
        return $this->set(self::RAWCERTIFICATEDATA, $value);
    }

    /**
     * Returns value of 'RawCertificateData' property
     *
     * @return string
     */
    public function getRawCertificateData()
    {
        $value = $this->get(self::RAWCERTIFICATEDATA);
        return $value === null ? (string)$value : $value;
    }
}
}