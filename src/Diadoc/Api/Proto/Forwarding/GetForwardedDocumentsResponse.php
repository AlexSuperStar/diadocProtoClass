<?php
/**
 * Auto generated from ForwardingApi.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * GetForwardedDocumentsResponse message
 */
class GetForwardedDocumentsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const FORWARDEDDOCUMENTS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FORWARDEDDOCUMENTS => array(
            'name' => 'ForwardedDocuments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Forwarding\ForwardedDocument'
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
        $this->values[self::FORWARDEDDOCUMENTS] = array();
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
     * Appends value to 'ForwardedDocuments' list
     *
     * @param \Diadoc\Api\Proto\Forwarding\ForwardedDocument $value Value to append
     *
     * @return null
     */
    public function appendForwardedDocuments(\Diadoc\Api\Proto\Forwarding\ForwardedDocument $value)
    {
        return $this->append(self::FORWARDEDDOCUMENTS, $value);
    }

    /**
     * Clears 'ForwardedDocuments' list
     *
     * @return null
     */
    public function clearForwardedDocuments()
    {
        return $this->clear(self::FORWARDEDDOCUMENTS);
    }

    /**
     * Returns 'ForwardedDocuments' list
     *
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocument[]
     */
    public function getForwardedDocuments()
    {
        return $this->get(self::FORWARDEDDOCUMENTS);
    }

    /**
     * Returns 'ForwardedDocuments' iterator
     *
     * @return \ArrayIterator
     */
    public function getForwardedDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::FORWARDEDDOCUMENTS));
    }

    /**
     * Returns element from 'ForwardedDocuments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocument
     */
    public function getForwardedDocumentsAt($offset)
    {
        return $this->get(self::FORWARDEDDOCUMENTS, $offset);
    }

    /**
     * Returns count of 'ForwardedDocuments' list
     *
     * @return int
     */
    public function getForwardedDocumentsCount()
    {
        return $this->count(self::FORWARDEDDOCUMENTS);
    }
}
}