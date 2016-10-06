<?php
/**
 * Auto generated from DocflowApi.proto at 2016-10-06 18:03:23
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * SearchDocflowsResponse message
 */
class SearchDocflowsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTS = 1;
    const HAVEMOREDOCUMENTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTS => array(
            'name' => 'Documents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentWithDocflow'
        ),
        self::HAVEMOREDOCUMENTS => array(
            'name' => 'HaveMoreDocuments',
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
        $this->values[self::DOCUMENTS] = array();
        $this->values[self::HAVEMOREDOCUMENTS] = null;
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
     * Appends value to 'Documents' list
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value Value to append
     *
     * @return null
     */
    public function appendDocuments(\Diadoc\Api\Proto\Docflow\DocumentWithDocflow $value)
    {
        return $this->append(self::DOCUMENTS, $value);
    }

    /**
     * Clears 'Documents' list
     *
     * @return null
     */
    public function clearDocuments()
    {
        return $this->clear(self::DOCUMENTS);
    }

    /**
     * Returns 'Documents' list
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow[]
     */
    public function getDocuments()
    {
        return $this->get(self::DOCUMENTS);
    }

    /**
     * Returns 'Documents' iterator
     *
     * @return \ArrayIterator
     */
    public function getDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::DOCUMENTS));
    }

    /**
     * Returns element from 'Documents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocumentsAt($offset)
    {
        return $this->get(self::DOCUMENTS, $offset);
    }

    /**
     * Returns count of 'Documents' list
     *
     * @return int
     */
    public function getDocumentsCount()
    {
        return $this->count(self::DOCUMENTS);
    }

    /**
     * Sets value of 'HaveMoreDocuments' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHaveMoreDocuments($value)
    {
        return $this->set(self::HAVEMOREDOCUMENTS, $value);
    }

    /**
     * Returns value of 'HaveMoreDocuments' property
     *
     * @return boolean
     */
    public function getHaveMoreDocuments()
    {
        $value = $this->get(self::HAVEMOREDOCUMENTS);
        return $value === null ? (boolean)$value : $value;
    }
}
}