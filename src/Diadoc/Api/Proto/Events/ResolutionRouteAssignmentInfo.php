<?php
/**
* Auto generated from ResolutionRouteInfo.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRouteAssignmentInfo message
 */
class ResolutionRouteAssignmentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROUTEID = 1;
    const AUTHOR = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROUTEID => array(
            'name' => 'RouteId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTHOR => array(
            'name' => 'Author',
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
        $this->values[self::ROUTEID] = null;
        $this->values[self::AUTHOR] = null;
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
     * Sets value of 'RouteId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRouteId($value)
    {
        return $this->set(self::ROUTEID, $value);
    }

    /**
     * Returns value of 'RouteId' property
     *
     * @return string
     */
    public function getRouteId()
    {
        $value = $this->get(self::ROUTEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Author' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthor($value)
    {
        return $this->set(self::AUTHOR, $value);
    }

    /**
     * Returns value of 'Author' property
     *
     * @return string
     */
    public function getAuthor()
    {
        $value = $this->get(self::AUTHOR);
        return $value === null ? (string)$value : $value;
    }
}
}