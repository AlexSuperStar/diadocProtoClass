<?php
/**
* Auto generated from ResolutionRouteList.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ResolutionRoute message
 */
class ResolutionRoute extends \ProtobufMessage
{
    /* Field index constants */
    const ROUTEID = 1;
    const NAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROUTEID => array(
            'name' => 'RouteId',
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
        $this->values[self::ROUTEID] = null;
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