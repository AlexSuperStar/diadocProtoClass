<?php
/**
 * Auto generated from Content_v2.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Content_v2 message
 */
class Content_v2 extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT = 1;
    const NAMEONSHELF = 2;
    const PATCHEDCONTENTID = 3;
    const DOCUMENTID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAMEONSHELF => array(
            'name' => 'NameOnShelf',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PATCHEDCONTENTID => array(
            'name' => 'PatchedContentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\DocumentIdEx'
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
        $this->values[self::CONTENT] = null;
        $this->values[self::NAMEONSHELF] = null;
        $this->values[self::PATCHEDCONTENTID] = null;
        $this->values[self::DOCUMENTID] = null;
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
     * Sets value of 'Content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NameOnShelf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNameOnShelf($value)
    {
        return $this->set(self::NAMEONSHELF, $value);
    }

    /**
     * Returns value of 'NameOnShelf' property
     *
     * @return string
     */
    public function getNameOnShelf()
    {
        $value = $this->get(self::NAMEONSHELF);
        return $value === null ? (string)$value : $value;
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

    /**
     * Sets value of 'DocumentId' property
     *
     * @param \Diadoc\Api\Proto\DocumentIdEx $value Property value
     *
     * @return null
     */
    public function setDocumentId(\Diadoc\Api\Proto\DocumentIdEx $value=null)
    {
        return $this->set(self::DOCUMENTID, $value);
    }

    /**
     * Returns value of 'DocumentId' property
     *
     * @return \Diadoc\Api\Proto\DocumentIdEx
     */
    public function getDocumentId()
    {
        return $this->get(self::DOCUMENTID);
    }
}
}