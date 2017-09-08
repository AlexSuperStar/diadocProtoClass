<?php
/**
* Auto generated from AcquireCounteragent.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * AcquireCounteragentResult message
 */
class AcquireCounteragentResult extends \ProtobufMessage
{
    /* Field index constants */
    const ORGID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGID => array(
            'name' => 'OrgId',
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
        $this->values[self::ORGID] = null;
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
     * Sets value of 'OrgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrgId($value)
    {
        return $this->set(self::ORGID, $value);
    }

    /**
     * Returns value of 'OrgId' property
     *
     * @return string
     */
    public function getOrgId()
    {
        $value = $this->get(self::ORGID);
        return $value === null ? (string)$value : $value;
    }
}
}