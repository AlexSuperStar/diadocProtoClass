<?php
/**
 * Auto generated from KeyValueStorage.proto at 2016-10-06 18:08:39
 *
 * Diadoc.Api.Proto.KeyValueStorage package
 */

namespace Diadoc\Api\Proto\KeyValueStorage {
/**
 * KeyValueStorageApiPutRequest message
 */
class KeyValueStorageApiPutRequest extends \ProtobufMessage
{
    /* Field index constants */
    const ENTRIES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTRIES => array(
            'name' => 'Entries',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry'
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
        $this->values[self::ENTRIES] = array();
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
     * Appends value to 'Entries' list
     *
     * @param \Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry $value Value to append
     *
     * @return null
     */
    public function appendEntries(\Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry $value)
    {
        return $this->append(self::ENTRIES, $value);
    }

    /**
     * Clears 'Entries' list
     *
     * @return null
     */
    public function clearEntries()
    {
        return $this->clear(self::ENTRIES);
    }

    /**
     * Returns 'Entries' list
     *
     * @return \Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry[]
     */
    public function getEntries()
    {
        return $this->get(self::ENTRIES);
    }

    /**
     * Returns 'Entries' iterator
     *
     * @return \ArrayIterator
     */
    public function getEntriesIterator()
    {
        return new \ArrayIterator($this->get(self::ENTRIES));
    }

    /**
     * Returns element from 'Entries' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry
     */
    public function getEntriesAt($offset)
    {
        return $this->get(self::ENTRIES, $offset);
    }

    /**
     * Returns count of 'Entries' list
     *
     * @return int
     */
    public function getEntriesCount()
    {
        return $this->count(self::ENTRIES);
    }
}
}