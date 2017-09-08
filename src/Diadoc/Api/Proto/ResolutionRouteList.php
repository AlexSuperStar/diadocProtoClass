<?php
/**
* Auto generated from ResolutionRouteList.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ResolutionRouteList message
 */
class ResolutionRouteList extends \ProtobufMessage
{
    /* Field index constants */
    const RESOLUTIONROUTES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESOLUTIONROUTES => array(
            'name' => 'ResolutionRoutes',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\ResolutionRoute'
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
        $this->values[self::RESOLUTIONROUTES] = array();
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
     * Appends value to 'ResolutionRoutes' list
     *
     * @param \Diadoc\Api\Proto\ResolutionRoute $value Value to append
     *
     * @return null
     */
    public function appendResolutionRoutes(\Diadoc\Api\Proto\ResolutionRoute $value)
    {
        return $this->append(self::RESOLUTIONROUTES, $value);
    }

    /**
     * Clears 'ResolutionRoutes' list
     *
     * @return null
     */
    public function clearResolutionRoutes()
    {
        return $this->clear(self::RESOLUTIONROUTES);
    }

    /**
     * Returns 'ResolutionRoutes' list
     *
     * @return \Diadoc\Api\Proto\ResolutionRoute[]
     */
    public function getResolutionRoutes()
    {
        return $this->get(self::RESOLUTIONROUTES);
    }

    /**
     * Returns 'ResolutionRoutes' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRoutesIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONROUTES));
    }

    /**
     * Returns element from 'ResolutionRoutes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\ResolutionRoute
     */
    public function getResolutionRoutesAt($offset)
    {
        return $this->get(self::RESOLUTIONROUTES, $offset);
    }

    /**
     * Returns count of 'ResolutionRoutes' list
     *
     * @return int
     */
    public function getResolutionRoutesCount()
    {
        return $this->count(self::RESOLUTIONROUTES);
    }
}
}