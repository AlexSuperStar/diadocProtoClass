<?php
/**
 * Auto generated from FnsRegistrationMessageInfo.proto at 2016-10-06 18:08:58
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * FnsRegistrationMessageInfo message
 */
class FnsRegistrationMessageInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CERTIFICATES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CERTIFICATES => array(
            'name' => 'Certificates',
            'repeated' => true,
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
        $this->values[self::CERTIFICATES] = array();
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
     * Appends value to 'Certificates' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCertificates($value)
    {
        return $this->append(self::CERTIFICATES, $value);
    }

    /**
     * Clears 'Certificates' list
     *
     * @return null
     */
    public function clearCertificates()
    {
        return $this->clear(self::CERTIFICATES);
    }

    /**
     * Returns 'Certificates' list
     *
     * @return string[]
     */
    public function getCertificates()
    {
        return $this->get(self::CERTIFICATES);
    }

    /**
     * Returns 'Certificates' iterator
     *
     * @return \ArrayIterator
     */
    public function getCertificatesIterator()
    {
        return new \ArrayIterator($this->get(self::CERTIFICATES));
    }

    /**
     * Returns element from 'Certificates' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getCertificatesAt($offset)
    {
        return $this->get(self::CERTIFICATES, $offset);
    }

    /**
     * Returns count of 'Certificates' list
     *
     * @return int
     */
    public function getCertificatesCount()
    {
        return $this->count(self::CERTIFICATES);
    }
}
}