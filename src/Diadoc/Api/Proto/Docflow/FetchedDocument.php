<?php
/**
* Auto generated from DocflowApi.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * FetchedDocument message
 */
class FetchedDocument extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENT = 1;
    const INDEXKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENT => array(
            'name' => 'Document',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentWithDocflow'
        ),
        self::INDEXKEY => array(
            'name' => 'IndexKey',
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
        $this->values[self::DOCUMENT] = null;
        $this->values[self::INDEXKEY] = null;
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
     * Sets value of 'Document' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value Property value
     *
     * @return null
     */
    public function setDocument(\Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value=null)
    {
        return $this->set(self::DOCUMENT, $value);
    }

    /**
     * Returns value of 'Document' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocument()
    {
        return $this->get(self::DOCUMENT);
    }

    /**
     * Sets value of 'IndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndexKey($value)
    {
        return $this->set(self::INDEXKEY, $value);
    }

    /**
     * Returns value of 'IndexKey' property
     *
     * @return string
     */
    public function getIndexKey()
    {
        $value = $this->get(self::INDEXKEY);
        return $value === null ? (string)$value : $value;
    }
}
}