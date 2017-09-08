<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * DocumentPatchedContent message
 */
class DocumentPatchedContent extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTID = 1;
    const PATCHEDCONTENTID = 2;
    const CONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::PATCHEDCONTENTID => array(
            'name' => 'PatchedContentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENT => array(
            'name' => 'Content',
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::PATCHEDCONTENTID] = null;
        $this->values[self::CONTENT] = null;
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
     * Sets value of 'DocumentId' property
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Property value
     *
     * @return null
     */
    public function setDocumentId(\Diadoc\Api\Proto\DocumentId $value=null)
    {
        return $this->set(self::DOCUMENTID, $value);
    }

    /**
     * Returns value of 'DocumentId' property
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->get(self::DOCUMENTID);
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
}
}