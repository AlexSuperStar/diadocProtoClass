<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * DraftToSend message
 */
class DraftToSend extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const DRAFTID = 2;
    const TOBOXID = 3;
    const TODEPARTMENTID = 4;
    const DOCUMENTSIGNATURES = 5;
    const PROXYBOXID = 6;
    const PROXYDEPARTMENTID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DRAFTID => array(
            'name' => 'DraftId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOBOXID => array(
            'name' => 'ToBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TODEPARTMENTID => array(
            'name' => 'ToDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTSIGNATURES => array(
            'name' => 'DocumentSignatures',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\DocumentSenderSignature'
        ),
        self::PROXYBOXID => array(
            'name' => 'ProxyBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROXYDEPARTMENTID => array(
            'name' => 'ProxyDepartmentId',
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
        $this->values[self::BOXID] = null;
        $this->values[self::DRAFTID] = null;
        $this->values[self::TOBOXID] = null;
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::DOCUMENTSIGNATURES] = array();
        $this->values[self::PROXYBOXID] = null;
        $this->values[self::PROXYDEPARTMENTID] = null;
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
     * Sets value of 'DraftId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDraftId($value)
    {
        return $this->set(self::DRAFTID, $value);
    }

    /**
     * Returns value of 'DraftId' property
     *
     * @return string
     */
    public function getDraftId()
    {
        $value = $this->get(self::DRAFTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ToBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToBoxId($value)
    {
        return $this->set(self::TOBOXID, $value);
    }

    /**
     * Returns value of 'ToBoxId' property
     *
     * @return string
     */
    public function getToBoxId()
    {
        $value = $this->get(self::TOBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ToDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToDepartmentId($value)
    {
        return $this->set(self::TODEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ToDepartmentId' property
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        $value = $this->get(self::TODEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'DocumentSignatures' list
     *
     * @param \Diadoc\Api\Proto\Events\DocumentSenderSignature $value Value to append
     *
     * @return null
     */
    public function appendDocumentSignatures(\Diadoc\Api\Proto\Events\DocumentSenderSignature $value)
    {
        return $this->append(self::DOCUMENTSIGNATURES, $value);
    }

    /**
     * Clears 'DocumentSignatures' list
     *
     * @return null
     */
    public function clearDocumentSignatures()
    {
        return $this->clear(self::DOCUMENTSIGNATURES);
    }

    /**
     * Returns 'DocumentSignatures' list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentSenderSignature[]
     */
    public function getDocumentSignatures()
    {
        return $this->get(self::DOCUMENTSIGNATURES);
    }

    /**
     * Returns 'DocumentSignatures' iterator
     *
     * @return \ArrayIterator
     */
    public function getDocumentSignaturesIterator()
    {
        return new \ArrayIterator($this->get(self::DOCUMENTSIGNATURES));
    }

    /**
     * Returns element from 'DocumentSignatures' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentSenderSignature
     */
    public function getDocumentSignaturesAt($offset)
    {
        return $this->get(self::DOCUMENTSIGNATURES, $offset);
    }

    /**
     * Returns count of 'DocumentSignatures' list
     *
     * @return int
     */
    public function getDocumentSignaturesCount()
    {
        return $this->count(self::DOCUMENTSIGNATURES);
    }

    /**
     * Sets value of 'ProxyBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyBoxId($value)
    {
        return $this->set(self::PROXYBOXID, $value);
    }

    /**
     * Returns value of 'ProxyBoxId' property
     *
     * @return string
     */
    public function getProxyBoxId()
    {
        $value = $this->get(self::PROXYBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ProxyDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyDepartmentId($value)
    {
        return $this->set(self::PROXYDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ProxyDepartmentId' property
     *
     * @return string
     */
    public function getProxyDepartmentId()
    {
        $value = $this->get(self::PROXYDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }
}
}