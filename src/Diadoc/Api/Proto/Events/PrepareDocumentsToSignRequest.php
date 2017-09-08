<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * PrepareDocumentsToSignRequest message
 */
class PrepareDocumentsToSignRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const DRAFTDOCUMENTS = 2;
    const DOCUMENTS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DRAFTDOCUMENTS => array(
            'name' => 'DraftDocuments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\DraftDocumentToPatch'
        ),
        self::DOCUMENTS => array(
            'name' => 'Documents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\DocumentToPatch'
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
        $this->values[self::BOXID] = null;
        $this->values[self::DRAFTDOCUMENTS] = array();
        $this->values[self::DOCUMENTS] = array();
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        $value = $this->get(self::BOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'DraftDocuments' list
     *
     * @param \Diadoc\Api\Proto\Events\DraftDocumentToPatch $value Value to append
     *
     * @return null
     */
    public function appendDraftDocuments(\Diadoc\Api\Proto\Events\DraftDocumentToPatch $value)
    {
        return $this->append(self::DRAFTDOCUMENTS, $value);
    }

    /**
     * Clears 'DraftDocuments' list
     *
     * @return null
     */
    public function clearDraftDocuments()
    {
        return $this->clear(self::DRAFTDOCUMENTS);
    }

    /**
     * Returns 'DraftDocuments' list
     *
     * @return \Diadoc\Api\Proto\Events\DraftDocumentToPatch[]
     */
    public function getDraftDocuments()
    {
        return $this->get(self::DRAFTDOCUMENTS);
    }

    /**
     * Returns 'DraftDocuments' iterator
     *
     * @return \ArrayIterator
     */
    public function getDraftDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::DRAFTDOCUMENTS));
    }

    /**
     * Returns element from 'DraftDocuments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\DraftDocumentToPatch
     */
    public function getDraftDocumentsAt($offset)
    {
        return $this->get(self::DRAFTDOCUMENTS, $offset);
    }

    /**
     * Returns count of 'DraftDocuments' list
     *
     * @return int
     */
    public function getDraftDocumentsCount()
    {
        return $this->count(self::DRAFTDOCUMENTS);
    }

    /**
     * Appends value to 'Documents' list
     *
     * @param \Diadoc\Api\Proto\Events\DocumentToPatch $value Value to append
     *
     * @return null
     */
    public function appendDocuments(\Diadoc\Api\Proto\Events\DocumentToPatch $value)
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
     * @return \Diadoc\Api\Proto\Events\DocumentToPatch[]
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
     * @return \Diadoc\Api\Proto\Events\DocumentToPatch
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
}
}