<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * PrepareDocumentsToSignResponse message
 */
class PrepareDocumentsToSignResponse extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTPATCHEDCONTENTS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTPATCHEDCONTENTS => array(
            'name' => 'DocumentPatchedContents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\DocumentPatchedContent'
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
        $this->values[self::DOCUMENTPATCHEDCONTENTS] = array();
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
     * Appends value to 'DocumentPatchedContents' list
     *
     * @param \Diadoc\Api\Proto\Events\DocumentPatchedContent $value Value to append
     *
     * @return null
     */
    public function appendDocumentPatchedContents(\Diadoc\Api\Proto\Events\DocumentPatchedContent $value)
    {
        return $this->append(self::DOCUMENTPATCHEDCONTENTS, $value);
    }

    /**
     * Clears 'DocumentPatchedContents' list
     *
     * @return null
     */
    public function clearDocumentPatchedContents()
    {
        return $this->clear(self::DOCUMENTPATCHEDCONTENTS);
    }

    /**
     * Returns 'DocumentPatchedContents' list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentPatchedContent[]
     */
    public function getDocumentPatchedContents()
    {
        return $this->get(self::DOCUMENTPATCHEDCONTENTS);
    }

    /**
     * Returns 'DocumentPatchedContents' iterator
     *
     * @return \ArrayIterator
     */
    public function getDocumentPatchedContentsIterator()
    {
        return new \ArrayIterator($this->get(self::DOCUMENTPATCHEDCONTENTS));
    }

    /**
     * Returns element from 'DocumentPatchedContents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentPatchedContent
     */
    public function getDocumentPatchedContentsAt($offset)
    {
        return $this->get(self::DOCUMENTPATCHEDCONTENTS, $offset);
    }

    /**
     * Returns count of 'DocumentPatchedContents' list
     *
     * @return int
     */
    public function getDocumentPatchedContentsCount()
    {
        return $this->count(self::DOCUMENTPATCHEDCONTENTS);
    }
}
}