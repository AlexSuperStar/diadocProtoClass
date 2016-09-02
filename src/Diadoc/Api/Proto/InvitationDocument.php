<?php
/**
 * Auto generated from AcquireCounteragent.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * InvitationDocument message
 */
class InvitationDocument extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNEDCONTENT = 1;
    const FILENAME = 2;
    const SIGNATUREREQUESTED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNEDCONTENT => array(
            'name' => 'SignedContent',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Events\SignedContent'
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATUREREQUESTED => array(
            'default' => false,
            'name' => 'SignatureRequested',
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
        $this->values[self::SIGNEDCONTENT] = null;
        $this->values[self::FILENAME] = null;
        $this->values[self::SIGNATUREREQUESTED] = self::$fields[self::SIGNATUREREQUESTED]['default'];
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
     * Sets value of 'SignedContent' property
     *
     * @param \Diadoc\Api\Proto\Events\SignedContent $value Property value
     *
     * @return null
     */
    public function setSignedContent(\Diadoc\Api\Proto\Events\SignedContent $value=null)
    {
        return $this->set(self::SIGNEDCONTENT, $value);
    }

    /**
     * Returns value of 'SignedContent' property
     *
     * @return \Diadoc\Api\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->get(self::SIGNEDCONTENT);
    }

    /**
     * Sets value of 'FileName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileName($value)
    {
        return $this->set(self::FILENAME, $value);
    }

    /**
     * Returns value of 'FileName' property
     *
     * @return string
     */
    public function getFileName()
    {
        $value = $this->get(self::FILENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignatureRequested' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSignatureRequested($value)
    {
        return $this->set(self::SIGNATUREREQUESTED, $value);
    }

    /**
     * Returns value of 'SignatureRequested' property
     *
     * @return boolean
     */
    public function getSignatureRequested()
    {
        $value = $this->get(self::SIGNATUREREQUESTED);
        return $value === null ? (boolean)$value : $value;
    }
}
}