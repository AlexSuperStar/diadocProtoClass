<?php
/**
* Auto generated from Counteragent.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CounteragentCertificateList message
 */
class CounteragentCertificateList extends \ProtobufMessage
{
    /* Field index constants */
    const CERTIFICATES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CERTIFICATES => array(
            'name' => 'Certificates',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Certificate'
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
     * @param \Diadoc\Api\Proto\Certificate $value Value to append
     *
     * @return null
     */
    public function appendCertificates(\Diadoc\Api\Proto\Certificate $value)
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
     * @return \Diadoc\Api\Proto\Certificate[]
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
     * @return \Diadoc\Api\Proto\Certificate
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