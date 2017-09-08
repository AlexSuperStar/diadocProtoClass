<?php
/**
* Auto generated from Attachment.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * Attachment message
 */
class Attachment extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITY = 1;
    const ATTACHMENTFILENAME = 2;
    const DISPLAYFILENAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITY => array(
            'name' => 'Entity',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\Entity'
        ),
        self::ATTACHMENTFILENAME => array(
            'name' => 'AttachmentFilename',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISPLAYFILENAME => array(
            'name' => 'DisplayFilename',
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
        $this->values[self::ENTITY] = null;
        $this->values[self::ATTACHMENTFILENAME] = null;
        $this->values[self::DISPLAYFILENAME] = null;
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
     * Sets value of 'AttachmentFilename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAttachmentFilename($value)
    {
        return $this->set(self::ATTACHMENTFILENAME, $value);
    }

    /**
     * Returns value of 'AttachmentFilename' property
     *
     * @return string
     */
    public function getAttachmentFilename()
    {
        $value = $this->get(self::ATTACHMENTFILENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DisplayFilename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDisplayFilename($value)
    {
        return $this->set(self::DISPLAYFILENAME, $value);
    }

    /**
     * Returns value of 'DisplayFilename' property
     *
     * @return string
     */
    public function getDisplayFilename()
    {
        $value = $this->get(self::DISPLAYFILENAME);
        return $value === null ? (string)$value : $value;
    }
}
}