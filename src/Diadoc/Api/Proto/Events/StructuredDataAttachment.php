<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * StructuredDataAttachment message
 */
class StructuredDataAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT = 1;
    const FILENAME = 2;
    const PARENTCUSTOMDOCUMENTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'Content',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARENTCUSTOMDOCUMENTID => array(
            'name' => 'ParentCustomDocumentId',
            'required' => true,
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
        $this->values[self::CONTENT] = null;
        $this->values[self::FILENAME] = null;
        $this->values[self::PARENTCUSTOMDOCUMENTID] = null;
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
     * Sets value of 'ParentCustomDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentCustomDocumentId($value)
    {
        return $this->set(self::PARENTCUSTOMDOCUMENTID, $value);
    }

    /**
     * Returns value of 'ParentCustomDocumentId' property
     *
     * @return string
     */
    public function getParentCustomDocumentId()
    {
        $value = $this->get(self::PARENTCUSTOMDOCUMENTID);
        return $value === null ? (string)$value : $value;
    }
}
}