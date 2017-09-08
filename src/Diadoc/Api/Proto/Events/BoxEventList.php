<?php
/**
* Auto generated from DiadocMessage-GetApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * BoxEventList message
 */
class BoxEventList extends \ProtobufMessage
{
    /* Field index constants */
    const EVENTS = 1;
    const TOTALCOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENTS => array(
            'name' => 'Events',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\BoxEvent'
        ),
        self::TOTALCOUNT => array(
            'name' => 'TotalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::EVENTS] = array();
        $this->values[self::TOTALCOUNT] = null;
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
     * Appends value to 'Events' list
     *
     * @param \Diadoc\Api\Proto\Events\BoxEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\Diadoc\Api\Proto\Events\BoxEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'Events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'Events' list
     *
     * @return \Diadoc\Api\Proto\Events\BoxEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'Events' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'Events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\BoxEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'Events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
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
}
}