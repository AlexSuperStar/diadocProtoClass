<?php
/**
* Auto generated from TimeBasedFilter.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * TimeBasedFilter message
 */
class TimeBasedFilter extends \ProtobufMessage
{
    /* Field index constants */
    const FROMTIMESTAMP = 1;
    const TOTIMESTAMP = 2;
    const SORTDIRECTION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROMTIMESTAMP => array(
            'name' => 'FromTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::TOTIMESTAMP => array(
            'name' => 'ToTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::SORTDIRECTION => array(
            'default' => \Diadoc\Api\Proto\SortDirection::Ascending,
            'name' => 'SortDirection',
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
        $this->values[self::FROMTIMESTAMP] = null;
        $this->values[self::TOTIMESTAMP] = null;
        $this->values[self::SORTDIRECTION] = self::$fields[self::SORTDIRECTION]['default'];
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
     * Sets value of 'FromTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setFromTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::FROMTIMESTAMP, $value);
    }

    /**
     * Returns value of 'FromTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getFromTimestamp()
    {
        return $this->get(self::FROMTIMESTAMP);
    }

    /**
     * Sets value of 'ToTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setToTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::TOTIMESTAMP, $value);
    }

    /**
     * Returns value of 'ToTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getToTimestamp()
    {
        return $this->get(self::TOTIMESTAMP);
    }

    /**
     * Sets value of 'SortDirection' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSortDirection($value)
    {
        return $this->set(self::SORTDIRECTION, $value);
    }

    /**
     * Returns value of 'SortDirection' property
     *
     * @return integer
     */
    public function getSortDirection()
    {
        $value = $this->get(self::SORTDIRECTION);
        return $value === null ? (integer)$value : $value;
    }
}
}