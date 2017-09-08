<?php
/**
* Auto generated from Counteragent.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CounteragentList message
 */
class CounteragentList extends \ProtobufMessage
{
    /* Field index constants */
    const TOTALCOUNT = 1;
    const COUNTERAGENTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTALCOUNT => array(
            'name' => 'TotalCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUNTERAGENTS => array(
            'name' => 'Counteragents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Counteragent'
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
        $this->values[self::TOTALCOUNT] = null;
        $this->values[self::COUNTERAGENTS] = array();
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
     * Sets value of 'TotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalCount($value)
    {
        return $this->set(self::TOTALCOUNT, $value);
    }

    /**
     * Returns value of 'TotalCount' property
     *
     * @return integer
     */
    public function getTotalCount()
    {
        $value = $this->get(self::TOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'Counteragents' list
     *
     * @param \Diadoc\Api\Proto\Counteragent $value Value to append
     *
     * @return null
     */
    public function appendCounteragents(\Diadoc\Api\Proto\Counteragent $value)
    {
        return $this->append(self::COUNTERAGENTS, $value);
    }

    /**
     * Clears 'Counteragents' list
     *
     * @return null
     */
    public function clearCounteragents()
    {
        return $this->clear(self::COUNTERAGENTS);
    }

    /**
     * Returns 'Counteragents' list
     *
     * @return \Diadoc\Api\Proto\Counteragent[]
     */
    public function getCounteragents()
    {
        return $this->get(self::COUNTERAGENTS);
    }

    /**
     * Returns 'Counteragents' iterator
     *
     * @return \ArrayIterator
     */
    public function getCounteragentsIterator()
    {
        return new \ArrayIterator($this->get(self::COUNTERAGENTS));
    }

    /**
     * Returns element from 'Counteragents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Counteragent
     */
    public function getCounteragentsAt($offset)
    {
        return $this->get(self::COUNTERAGENTS, $offset);
    }

    /**
     * Returns count of 'Counteragents' list
     *
     * @return int
     */
    public function getCounteragentsCount()
    {
        return $this->count(self::COUNTERAGENTS);
    }
}
}