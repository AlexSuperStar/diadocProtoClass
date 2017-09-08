<?php
/**
* Auto generated from GetOrganizationsByInnList.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationWithCounteragentStatus message
 */
class OrganizationWithCounteragentStatus extends \ProtobufMessage
{
    /* Field index constants */
    const ORGANIZATION = 1;
    const COUNTERAGENTSTATUS = 2;
    const LASTEVENTTIMESTAMPTICKS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGANIZATION => array(
            'name' => 'Organization',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Organization'
        ),
        self::COUNTERAGENTSTATUS => array(
            'default' => \Diadoc\Api\Proto\CounteragentStatus::UnknownCounteragentStatus,
            'name' => 'CounteragentStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTEVENTTIMESTAMPTICKS => array(
            'name' => 'LastEventTimestampTicks',
            'required' => false,
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
        $this->values[self::ORGANIZATION] = null;
        $this->values[self::COUNTERAGENTSTATUS] = self::$fields[self::COUNTERAGENTSTATUS]['default'];
        $this->values[self::LASTEVENTTIMESTAMPTICKS] = null;
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
     * Sets value of 'Organization' property
     *
     * @param \Diadoc\Api\Proto\Organization $value Property value
     *
     * @return null
     */
    public function setOrganization(\Diadoc\Api\Proto\Organization $value=null)
    {
        return $this->set(self::ORGANIZATION, $value);
    }

    /**
     * Returns value of 'Organization' property
     *
     * @return \Diadoc\Api\Proto\Organization
     */
    public function getOrganization()
    {
        return $this->get(self::ORGANIZATION);
    }

    /**
     * Sets value of 'CounteragentStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCounteragentStatus($value)
    {
        return $this->set(self::COUNTERAGENTSTATUS, $value);
    }

    /**
     * Returns value of 'CounteragentStatus' property
     *
     * @return integer
     */
    public function getCounteragentStatus()
    {
        $value = $this->get(self::COUNTERAGENTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'LastEventTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastEventTimestampTicks($value)
    {
        return $this->set(self::LASTEVENTTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'LastEventTimestampTicks' property
     *
     * @return integer
     */
    public function getLastEventTimestampTicks()
    {
        $value = $this->get(self::LASTEVENTTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }
}
}