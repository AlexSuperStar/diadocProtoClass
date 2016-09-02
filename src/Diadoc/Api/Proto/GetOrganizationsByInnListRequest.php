<?php
/**
 * Auto generated from GetOrganizationsByInnList.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * GetOrganizationsByInnListRequest message
 */
class GetOrganizationsByInnListRequest extends \ProtobufMessage
{
    /* Field index constants */
    const INNLIST = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INNLIST => array(
            'name' => 'InnList',
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
        $this->values[self::INNLIST] = array();
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
     * Appends value to 'InnList' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendInnList($value)
    {
        return $this->append(self::INNLIST, $value);
    }

    /**
     * Clears 'InnList' list
     *
     * @return null
     */
    public function clearInnList()
    {
        return $this->clear(self::INNLIST);
    }

    /**
     * Returns 'InnList' list
     *
     * @return string[]
     */
    public function getInnList()
    {
        return $this->get(self::INNLIST);
    }

    /**
     * Returns 'InnList' iterator
     *
     * @return \ArrayIterator
     */
    public function getInnListIterator()
    {
        return new \ArrayIterator($this->get(self::INNLIST));
    }

    /**
     * Returns element from 'InnList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getInnListAt($offset)
    {
        return $this->get(self::INNLIST, $offset);
    }

    /**
     * Returns count of 'InnList' list
     *
     * @return int
     */
    public function getInnListCount()
    {
        return $this->count(self::INNLIST);
    }
}
}