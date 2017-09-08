<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * CustomDataPatch message
 */
class CustomDataPatch extends \ProtobufMessage
{
    /* Field index constants */
    const PARENTENTITYID = 1;
    const OPERATION = 2;
    const KEY = 3;
    const VALUE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARENTENTITYID => array(
            'name' => 'ParentEntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATION => array(
            'name' => 'Operation',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY => array(
            'name' => 'Key',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE => array(
            'name' => 'Value',
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
        $this->values[self::PARENTENTITYID] = null;
        $this->values[self::OPERATION] = null;
        $this->values[self::KEY] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'ParentEntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentEntityId($value)
    {
        return $this->set(self::PARENTENTITYID, $value);
    }

    /**
     * Returns value of 'ParentEntityId' property
     *
     * @return string
     */
    public function getParentEntityId()
    {
        $value = $this->get(self::PARENTENTITYID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Operation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOperation($value)
    {
        return $this->set(self::OPERATION, $value);
    }

    /**
     * Returns value of 'Operation' property
     *
     * @return integer
     */
    public function getOperation()
    {
        $value = $this->get(self::OPERATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'Key' property
     *
     * @return string
     */
    public function getKey()
    {
        $value = $this->get(self::KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'Value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (string)$value : $value;
    }
}
}