<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRouteRemoval message
 */
class ResolutionRouteRemoval extends \ProtobufMessage
{
    /* Field index constants */
    const PARENTENTITYID = 1;
    const ROUTEID = 2;
    const COMMENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARENTENTITYID => array(
            'name' => 'ParentEntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROUTEID => array(
            'name' => 'RouteId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMMENT => array(
            'default' => '',
            'name' => 'Comment',
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
        $this->values[self::ROUTEID] = null;
        $this->values[self::COMMENT] = self::$fields[self::COMMENT]['default'];
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
     * Sets value of 'Comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::COMMENT);
        return $value === null ? (string)$value : $value;
    }
}
}