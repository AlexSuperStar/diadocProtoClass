<?php
/**
 * Auto generated from Timestamp.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Timestamp message
 */
class Timestamp extends \ProtobufMessage
{
    /* Field index constants */
    const TICKS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TICKS => array(
            'name' => 'Ticks',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
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
        $this->values[self::TICKS] = null;
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
     * Sets value of 'Ticks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTicks($value)
    {
        return $this->set(self::TICKS, $value);
    }

    /**
     * Returns value of 'Ticks' property
     *
     * @return integer
     */
    public function getTicks()
    {
        $value = $this->get(self::TICKS);
        return $value === null ? (integer)$value : $value;
    }
}
}