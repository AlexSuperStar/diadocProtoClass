<?php
/**
 * Auto generated from KeyValueStorage.proto at 2016-10-06 18:08:39
 *
 * Diadoc.Api.Proto.KeyValueStorage package
 */

namespace Diadoc\Api\Proto\KeyValueStorage {
/**
 * KeyValueStorageApiGetRequest message
 */
class KeyValueStorageApiGetRequest extends \ProtobufMessage
{
    /* Field index constants */
    const KEYS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEYS => array(
            'name' => 'Keys',
            'repeated' => true,
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
        $this->values[self::KEYS] = array();
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
     * Appends value to 'Keys' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendKeys($value)
    {
        return $this->append(self::KEYS, $value);
    }

    /**
     * Clears 'Keys' list
     *
     * @return null
     */
    public function clearKeys()
    {
        return $this->clear(self::KEYS);
    }

    /**
     * Returns 'Keys' list
     *
     * @return string[]
     */
    public function getKeys()
    {
        return $this->get(self::KEYS);
    }

    /**
     * Returns 'Keys' iterator
     *
     * @return \ArrayIterator
     */
    public function getKeysIterator()
    {
        return new \ArrayIterator($this->get(self::KEYS));
    }

    /**
     * Returns element from 'Keys' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getKeysAt($offset)
    {
        return $this->get(self::KEYS, $offset);
    }

    /**
     * Returns count of 'Keys' list
     *
     * @return int
     */
    public function getKeysCount()
    {
        return $this->count(self::KEYS);
    }
}
}