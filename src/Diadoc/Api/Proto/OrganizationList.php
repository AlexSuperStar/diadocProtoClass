<?php
/**
* Auto generated from Organization.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationList message
 */
class OrganizationList extends \ProtobufMessage
{
    /* Field index constants */
    const ORGANIZATIONS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGANIZATIONS => array(
            'name' => 'Organizations',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Organization'
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
        $this->values[self::ORGANIZATIONS] = array();
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
     * Appends value to 'Organizations' list
     *
     * @param \Diadoc\Api\Proto\Organization $value Value to append
     *
     * @return null
     */
    public function appendOrganizations(\Diadoc\Api\Proto\Organization $value)
    {
        return $this->append(self::ORGANIZATIONS, $value);
    }

    /**
     * Clears 'Organizations' list
     *
     * @return null
     */
    public function clearOrganizations()
    {
        return $this->clear(self::ORGANIZATIONS);
    }

    /**
     * Returns 'Organizations' list
     *
     * @return \Diadoc\Api\Proto\Organization[]
     */
    public function getOrganizations()
    {
        return $this->get(self::ORGANIZATIONS);
    }

    /**
     * Returns 'Organizations' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrganizationsIterator()
    {
        return new \ArrayIterator($this->get(self::ORGANIZATIONS));
    }

    /**
     * Returns element from 'Organizations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Organization
     */
    public function getOrganizationsAt($offset)
    {
        return $this->get(self::ORGANIZATIONS, $offset);
    }

    /**
     * Returns count of 'Organizations' list
     *
     * @return int
     */
    public function getOrganizationsCount()
    {
        return $this->count(self::ORGANIZATIONS);
    }
}
}