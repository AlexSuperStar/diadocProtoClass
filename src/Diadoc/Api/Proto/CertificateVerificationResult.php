<?php
/**
 * Auto generated from SignatureVerificationResult.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CertificateVerificationResult message
 */
class CertificateVerificationResult extends \ProtobufMessage
{
    /* Field index constants */
    const ISVALID = 2;
    const CERTIFICATECHAIN = 3;
    const VERIFICATIONTIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CERTIFICATECHAIN => array(
            'name' => 'CertificateChain',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CertificateChainElement'
        ),
        self::VERIFICATIONTIME => array(
            'name' => 'VerificationTime',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Timestamp'
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
        $this->values[self::ISVALID] = null;
        $this->values[self::CERTIFICATECHAIN] = array();
        $this->values[self::VERIFICATIONTIME] = null;
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
     * Appends value to 'CertificateChain' list
     *
     * @param \Diadoc\Api\Proto\CertificateChainElement $value Value to append
     *
     * @return null
     */
    public function appendCertificateChain(\Diadoc\Api\Proto\CertificateChainElement $value)
    {
        return $this->append(self::CERTIFICATECHAIN, $value);
    }

    /**
     * Clears 'CertificateChain' list
     *
     * @return null
     */
    public function clearCertificateChain()
    {
        return $this->clear(self::CERTIFICATECHAIN);
    }

    /**
     * Returns 'CertificateChain' list
     *
     * @return \Diadoc\Api\Proto\CertificateChainElement[]
     */
    public function getCertificateChain()
    {
        return $this->get(self::CERTIFICATECHAIN);
    }

    /**
     * Returns 'CertificateChain' iterator
     *
     * @return \ArrayIterator
     */
    public function getCertificateChainIterator()
    {
        return new \ArrayIterator($this->get(self::CERTIFICATECHAIN));
    }

    /**
     * Returns element from 'CertificateChain' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\CertificateChainElement
     */
    public function getCertificateChainAt($offset)
    {
        return $this->get(self::CERTIFICATECHAIN, $offset);
    }

    /**
     * Returns count of 'CertificateChain' list
     *
     * @return int
     */
    public function getCertificateChainCount()
    {
        return $this->count(self::CERTIFICATECHAIN);
    }

    /**
     * Sets value of 'VerificationTime' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setVerificationTime(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::VERIFICATIONTIME, $value);
    }

    /**
     * Returns value of 'VerificationTime' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getVerificationTime()
    {
        return $this->get(self::VERIFICATIONTIME);
    }
}
}