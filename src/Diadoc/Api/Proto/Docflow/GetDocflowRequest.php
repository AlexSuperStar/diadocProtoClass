<?php
/**
 * Auto generated from DocflowApi.proto at 2016-10-06 18:03:23
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * GetDocflowRequest message
 */
class GetDocflowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTID = 1;
    const LASTEVENTID = 2;
    const INJECTENTITYCONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::LASTEVENTID => array(
            'name' => 'LastEventId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::LASTEVENTID] = null;
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
     * Sets value of 'LastEventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastEventId($value)
    {
        return $this->set(self::LASTEVENTID, $value);
    }

    /**
     * Returns value of 'LastEventId' property
     *
     * @return string
     */
    public function getLastEventId()
    {
        $value = $this->get(self::LASTEVENTID);
        return $value === null ? (string)$value : $value;
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