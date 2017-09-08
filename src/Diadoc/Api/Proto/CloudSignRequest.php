<?php
/**
* Auto generated from CloudSign.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CloudSignRequest message
 */
class CloudSignRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FILES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FILES => array(
            'name' => 'Files',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CloudSignFile'
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
        $this->values[self::FILES] = array();
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
     * Appends value to 'Files' list
     *
     * @param \Diadoc\Api\Proto\CloudSignFile $value Value to append
     *
     * @return null
     */
    public function appendFiles(\Diadoc\Api\Proto\CloudSignFile $value)
    {
        return $this->append(self::FILES, $value);
    }

    /**
     * Clears 'Files' list
     *
     * @return null
     */
    public function clearFiles()
    {
        return $this->clear(self::FILES);
    }

    /**
     * Returns 'Files' list
     *
     * @return \Diadoc\Api\Proto\CloudSignFile[]
     */
    public function getFiles()
    {
        return $this->get(self::FILES);
    }

    /**
     * Returns 'Files' iterator
     *
     * @return \ArrayIterator
     */
    public function getFilesIterator()
    {
        return new \ArrayIterator($this->get(self::FILES));
    }

    /**
     * Returns element from 'Files' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\CloudSignFile
     */
    public function getFilesAt($offset)
    {
        return $this->get(self::FILES, $offset);
    }

    /**
     * Returns count of 'Files' list
     *
     * @return int
     */
    public function getFilesCount()
    {
        return $this->count(self::FILES);
    }
}
}