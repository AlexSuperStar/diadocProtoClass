<?php
/**
* Auto generated from ForwardingApi.proto
*
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * GetForwardedDocumentsRequest message
 */
class GetForwardedDocumentsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FORWARDEDDOCUMENTIDS = 1;
    const INJECTENTITYCONTENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FORWARDEDDOCUMENTIDS => array(
            'name' => 'ForwardedDocumentIds',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId'
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false,
            'name' => 'InjectEntityContent',
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
        $this->values[self::FORWARDEDDOCUMENTIDS] = array();
        $this->values[self::INJECTENTITYCONTENT] = self::$fields[self::INJECTENTITYCONTENT]['default'];
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
     * Appends value to 'ForwardedDocumentIds' list
     *
     * @param \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $value Value to append
     *
     * @return null
     */
    public function appendForwardedDocumentIds(\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $value)
    {
        return $this->append(self::FORWARDEDDOCUMENTIDS, $value);
    }

    /**
     * Clears 'ForwardedDocumentIds' list
     *
     * @return null
     */
    public function clearForwardedDocumentIds()
    {
        return $this->clear(self::FORWARDEDDOCUMENTIDS);
    }

    /**
     * Returns 'ForwardedDocumentIds' list
     *
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId[]
     */
    public function getForwardedDocumentIds()
    {
        return $this->get(self::FORWARDEDDOCUMENTIDS);
    }

    /**
     * Returns 'ForwardedDocumentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getForwardedDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::FORWARDEDDOCUMENTIDS));
    }

    /**
     * Returns element from 'ForwardedDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId
     */
    public function getForwardedDocumentIdsAt($offset)
    {
        return $this->get(self::FORWARDEDDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'ForwardedDocumentIds' list
     *
     * @return int
     */
    public function getForwardedDocumentIdsCount()
    {
        return $this->count(self::FORWARDEDDOCUMENTIDS);
    }

    /**
     * Sets value of 'InjectEntityContent' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setInjectEntityContent($value)
    {
        return $this->set(self::INJECTENTITYCONTENT, $value);
    }

    /**
     * Returns value of 'InjectEntityContent' property
     *
     * @return boolean
     */
    public function getInjectEntityContent()
    {
        $value = $this->get(self::INJECTENTITYCONTENT);
        return $value === null ? (boolean)$value : $value;
    }
}
}