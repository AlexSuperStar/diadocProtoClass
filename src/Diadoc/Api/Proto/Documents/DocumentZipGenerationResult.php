<?php
/**
* Auto generated from DocumentZip.proto
*
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * DocumentZipGenerationResult message
 */
class DocumentZipGenerationResult extends \ProtobufMessage
{
    /* Field index constants */
    const ZIPFILENAMEONSHELF = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ZIPFILENAMEONSHELF => array(
            'name' => 'ZipFileNameOnShelf',
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
        $this->values[self::ZIPFILENAMEONSHELF] = null;
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
     * Sets value of 'ZipFileNameOnShelf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setZipFileNameOnShelf($value)
    {
        return $this->set(self::ZIPFILENAMEONSHELF, $value);
    }

    /**
     * Returns value of 'ZipFileNameOnShelf' property
     *
     * @return string
     */
    public function getZipFileNameOnShelf()
    {
        $value = $this->get(self::ZIPFILENAMEONSHELF);
        return $value === null ? (string)$value : $value;
    }
}
}