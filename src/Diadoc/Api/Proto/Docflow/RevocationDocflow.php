<?php
/**
* Auto generated from RevocationDocflow.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * RevocationDocflow message
 */
class RevocationDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const REVOCATIONREQUESTATTACHMENT = 2;
    const RECIPIENTSIGNATUREDOCFLOW = 3;
    const RECIPIENTSIGNATUREREJECTIONDOCFLOW = 4;
    const INITIATORBOXID = 5;
    const ISREVOCATIONACCEPTED = 6;
    const ISREVOCATIONREJECTED = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::REVOCATIONREQUESTATTACHMENT => array(
            'name' => 'RevocationRequestAttachment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\SignedAttachment'
        ),
        self::RECIPIENTSIGNATUREDOCFLOW => array(
            'name' => 'RecipientSignatureDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow'
        ),
        self::RECIPIENTSIGNATUREREJECTIONDOCFLOW => array(
            'name' => 'RecipientSignatureRejectionDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow'
        ),
        self::INITIATORBOXID => array(
            'name' => 'InitiatorBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISREVOCATIONACCEPTED => array(
            'name' => 'IsRevocationAccepted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISREVOCATIONREJECTED => array(
            'name' => 'IsRevocationRejected',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::ISFINISHED] = null;
        $this->values[self::REVOCATIONREQUESTATTACHMENT] = null;
        $this->values[self::RECIPIENTSIGNATUREDOCFLOW] = null;
        $this->values[self::RECIPIENTSIGNATUREREJECTIONDOCFLOW] = null;
        $this->values[self::INITIATORBOXID] = null;
        $this->values[self::ISREVOCATIONACCEPTED] = null;
        $this->values[self::ISREVOCATIONREJECTED] = null;
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
     * Sets value of 'IsFinished' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsFinished($value)
    {
        return $this->set(self::ISFINISHED, $value);
    }

    /**
     * Returns value of 'IsFinished' property
     *
     * @return boolean
     */
    public function getIsFinished()
    {
        $value = $this->get(self::ISFINISHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'RevocationRequestAttachment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setRevocationRequestAttachment(\Diadoc\Api\Proto\Docflow\SignedAttachment $value=null)
    {
        return $this->set(self::REVOCATIONREQUESTATTACHMENT, $value);
    }

    /**
     * Returns value of 'RevocationRequestAttachment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachment
     */
    public function getRevocationRequestAttachment()
    {
        return $this->get(self::REVOCATIONREQUESTATTACHMENT);
    }

    /**
     * Sets value of 'RecipientSignatureDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow $value Property value
     *
     * @return null
     */
    public function setRecipientSignatureDocflow(\Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow $value=null)
    {
        return $this->set(self::RECIPIENTSIGNATUREDOCFLOW, $value);
    }

    /**
     * Returns value of 'RecipientSignatureDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow
     */
    public function getRecipientSignatureDocflow()
    {
        return $this->get(self::RECIPIENTSIGNATUREDOCFLOW);
    }

    /**
     * Sets value of 'RecipientSignatureRejectionDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $value Property value
     *
     * @return null
     */
    public function setRecipientSignatureRejectionDocflow(\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $value=null)
    {
        return $this->set(self::RECIPIENTSIGNATUREREJECTIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'RecipientSignatureRejectionDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow
     */
    public function getRecipientSignatureRejectionDocflow()
    {
        return $this->get(self::RECIPIENTSIGNATUREREJECTIONDOCFLOW);
    }

    /**
     * Sets value of 'InitiatorBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitiatorBoxId($value)
    {
        return $this->set(self::INITIATORBOXID, $value);
    }

    /**
     * Returns value of 'InitiatorBoxId' property
     *
     * @return string
     */
    public function getInitiatorBoxId()
    {
        $value = $this->get(self::INITIATORBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IsRevocationAccepted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsRevocationAccepted($value)
    {
        return $this->set(self::ISREVOCATIONACCEPTED, $value);
    }

    /**
     * Returns value of 'IsRevocationAccepted' property
     *
     * @return boolean
     */
    public function getIsRevocationAccepted()
    {
        $value = $this->get(self::ISREVOCATIONACCEPTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsRevocationRejected' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsRevocationRejected($value)
    {
        return $this->set(self::ISREVOCATIONREJECTED, $value);
    }

    /**
     * Returns value of 'IsRevocationRejected' property
     *
     * @return boolean
     */
    public function getIsRevocationRejected()
    {
        $value = $this->get(self::ISREVOCATIONREJECTED);
        return $value === null ? (boolean)$value : $value;
    }
}
}