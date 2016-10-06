<?php
/**
 * Auto generated from DocflowApi.proto at 2016-10-06 18:03:23
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * GetDocflowsByPacketIdRequest message
 */
class GetDocflowsByPacketIdRequest extends \ProtobufMessage
{
    /* Field index constants */
    const PACKETID = 1;
    const COUNT = 2;
    const INJECTENTITYCONTENT = 3;
    const AFTERINDEXKEY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PACKETID => array(
            'name' => 'PacketId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNT => array(
            'default' => 100,
            'name' => 'Count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false,
            'name' => 'InjectEntityContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::AFTERINDEXKEY => array(
            'name' => 'AfterIndexKey',
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
        $this->values[self::PACKETID] = null;
        $this->values[self::COUNT] = self::$fields[self::COUNT]['default'];
        $this->values[self::INJECTENTITYCONTENT] = self::$fields[self::INJECTENTITYCONTENT]['default'];
        $this->values[self::AFTERINDEXKEY] = null;
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
     * Sets value of 'PacketId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPacketId($value)
    {
        return $this->set(self::PACKETID, $value);
    }

    /**
     * Returns value of 'PacketId' property
     *
     * @return string
     */
    public function getPacketId()
    {
        $value = $this->get(self::PACKETID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'Count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
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

    /**
     * Sets value of 'AfterIndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAfterIndexKey($value)
    {
        return $this->set(self::AFTERINDEXKEY, $value);
    }

    /**
     * Returns value of 'AfterIndexKey' property
     *
     * @return string
     */
    public function getAfterIndexKey()
    {
        $value = $this->get(self::AFTERINDEXKEY);
        return $value === null ? (string)$value : $value;
    }
}
}