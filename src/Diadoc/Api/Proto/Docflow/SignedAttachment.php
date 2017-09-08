<?php
/**
* Auto generated from Attachment.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * SignedAttachment message
 */
class SignedAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const ATTACHMENT = 1;
    const SIGNATURE = 2;
    const COMMENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ATTACHMENT => array(
            'name' => 'Attachment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\Attachment'
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\Signature'
        ),
        self::COMMENT => array(
            'name' => 'Comment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\Entity'
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
        $this->values[self::ATTACHMENT] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::COMMENT] = null;
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
     * Sets value of 'Attachment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\Attachment $value Property value
     *
     * @return null
     */
    public function setAttachment(\Diadoc\Api\Proto\Docflow\Attachment $value=null)
    {
        return $this->set(self::ATTACHMENT, $value);
    }

    /**
     * Returns value of 'Attachment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\Attachment
     */
    public function getAttachment()
    {
        return $this->get(self::ATTACHMENT);
    }

    /**
     * Sets value of 'Signature' property
     *
     * @param \Diadoc\Api\Proto\Docflow\Signature $value Property value
     *
     * @return null
     */
    public function setSignature(\Diadoc\Api\Proto\Docflow\Signature $value=null)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'Signature' property
     *
     * @return \Diadoc\Api\Proto\Docflow\Signature
     */
    public function getSignature()
    {
        return $this->get(self::SIGNATURE);
    }

    /**
     * Sets value of 'Comment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\Entity $value Property value
     *
     * @return null
     */
    public function setComment(\Diadoc\Api\Proto\Docflow\Entity $value=null)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\Entity
     */
    public function getComment()
    {
        return $this->get(self::COMMENT);
    }
}
}