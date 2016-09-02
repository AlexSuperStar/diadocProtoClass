<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * DocumentSenderSignature message
 */
class DocumentSenderSignature extends \ProtobufMessage
{
    /* Field index constants */
    const PARENTENTITYID = 1;
    const SIGNATURE = 2;
    const SIGNWITHTESTSIGNATURE = 4;
    const PATCHEDCONTENTID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARENTENTITYID => array(
            'name' => 'ParentEntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNWITHTESTSIGNATURE => array(
            'default' => false,
            'name' => 'SignWithTestSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PATCHEDCONTENTID => array(
            'name' => 'PatchedContentId',
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
        $this->values[self::PARENTENTITYID] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::SIGNWITHTESTSIGNATURE] = self::$fields[self::SIGNWITHTESTSIGNATURE]['default'];
        $this->values[self::PATCHEDCONTENTID] = null;
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
     * Sets value of 'ParentEntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentEntityId($value)
    {
        return $this->set(self::PARENTENTITYID, $value);
    }

    /**
     * Returns value of 'ParentEntityId' property
     *
     * @return string
     */
    public function getParentEntityId()
    {
        $value = $this->get(self::PARENTENTITYID);
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
     * Sets value of 'PatchedContentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPatchedContentId($value)
    {
        return $this->set(self::PATCHEDCONTENTID, $value);
    }

    /**
     * Returns value of 'PatchedContentId' property
     *
     * @return string
     */
    public function getPatchedContentId()
    {
        $value = $this->get(self::PATCHEDCONTENTID);
        return $value === null ? (string)$value : $value;
    }
}
}