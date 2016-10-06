<?php
/**
 * Auto generated from Attachment.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * Signature message
 */
class Signature extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITY = 1;
    const SIGNERBOXID = 2;
    const SIGNERDEPARTMENTID = 3;
    const ISVALID = 4;
    const VERIFICATIONRESULT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITY => array(
            'name' => 'Entity',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\Entity'
        ),
        self::SIGNERBOXID => array(
            'name' => 'SignerBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNERDEPARTMENTID => array(
            'name' => 'SignerDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VERIFICATIONRESULT => array(
            'name' => 'VerificationResult',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\SignatureVerificationResult'
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
        $this->values[self::ENTITY] = null;
        $this->values[self::SIGNERBOXID] = null;
        $this->values[self::SIGNERDEPARTMENTID] = null;
        $this->values[self::ISVALID] = null;
        $this->values[self::VERIFICATIONRESULT] = null;
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
     * Sets value of 'Entity' property
     *
     * @param \Diadoc\Api\Proto\Docflow\Entity $value Property value
     *
     * @return null
     */
    public function setEntity(\Diadoc\Api\Proto\Docflow\Entity $value=null)
    {
        return $this->set(self::ENTITY, $value);
    }

    /**
     * Returns value of 'Entity' property
     *
     * @return \Diadoc\Api\Proto\Docflow\Entity
     */
    public function getEntity()
    {
        return $this->get(self::ENTITY);
    }

    /**
     * Sets value of 'SignerBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerBoxId($value)
    {
        return $this->set(self::SIGNERBOXID, $value);
    }

    /**
     * Returns value of 'SignerBoxId' property
     *
     * @return string
     */
    public function getSignerBoxId()
    {
        $value = $this->get(self::SIGNERBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignerDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerDepartmentId($value)
    {
        return $this->set(self::SIGNERDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'SignerDepartmentId' property
     *
     * @return string
     */
    public function getSignerDepartmentId()
    {
        $value = $this->get(self::SIGNERDEPARTMENTID);
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
     * Sets value of 'VerificationResult' property
     *
     * @param \Diadoc\Api\Proto\SignatureVerificationResult $value Property value
     *
     * @return null
     */
    public function setVerificationResult(\Diadoc\Api\Proto\SignatureVerificationResult $value=null)
    {
        return $this->set(self::VERIFICATIONRESULT, $value);
    }

    /**
     * Returns value of 'VerificationResult' property
     *
     * @return \Diadoc\Api\Proto\SignatureVerificationResult
     */
    public function getVerificationResult()
    {
        return $this->get(self::VERIFICATIONRESULT);
    }
}
}