<?php
/**
 * Auto generated from ResolutionChainList.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ResolutionChain message
 */
class ResolutionChain extends \ProtobufMessage
{
    /* Field index constants */
    const CHAINID = 1;
    const NAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHAINID => array(
            'name' => 'ChainId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'Name',
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
        $this->values[self::CHAINID] = null;
        $this->values[self::NAME] = null;
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
     * Sets value of 'ChainId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChainId($value)
    {
        return $this->set(self::CHAINID, $value);
    }

    /**
     * Returns value of 'ChainId' property
     *
     * @return string
     */
    public function getChainId()
    {
        $value = $this->get(self::CHAINID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'Name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }
}
}